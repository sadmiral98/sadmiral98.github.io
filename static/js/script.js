window.addEventListener("load", function () {
    document.querySelector(".main_section").classList.add("loaded");
    checkSections()
});

$(window).on("scroll", function () {
    checkSections()
});
var glob_selected_section = ""
var glob_section_distance = 5000
function isMobileView() {
    return window.innerWidth <= 768; // Adjust breakpoint as needed
}
if(!isMobileView()){
    navbarActiveIndicator()
}
function checkSections() {
    let sections_unloaded = $(".section_container").not(".loaded");
    let sections = $(".section_container");
    let windowBottom = $(window).scrollTop() + $(window).height()-80;
    let windowBottomNavbar = $(window).scrollTop() + $(window).height()-200;
    sections_unloaded.each(function() {
        let section = $(this)
        let sectionTop = section.offset().top;
        if (sectionTop <= windowBottom) {
            section.addClass("loaded");
        }
    })
    if(!isMobileView()){
        var selected_section = ""
        var section_distance = 5000

        sections.each(function() {
            let section = $(this)
            let sectionTop = section.offset().top;
            if (sectionTop <= windowBottomNavbar) {
                let distance = windowBottomNavbar - sectionTop
                if (distance < section_distance && distance > 30){
                    selected_section = section
                    section_distance = distance
                }else{
                    if ((windowBottomNavbar - $('.main_section').offset().top) < 800 ){
                        selected_section = $('.main_section')
                    }else{
                        selected_section = $('.about_section')
                    }
                }
            }
        })
        if (selected_section[0] !== glob_selected_section[0]){
            glob_selected_section = selected_section
            let firstClass = selected_section.attr("class").split(" ")[0];
            let class_section = firstClass.replace('_section','')
            $('.option').removeClass('active')
            $('.'+class_section+'_button').addClass('active')
            navbarActiveIndicator()
        }
    }
}
function navbarActiveIndicator() {
    let active_navbar = $('.option.active')
    let indicator = $('.active_navbar_container')
    let indicator_ball = indicator.find('.active_navbar')
    let width = active_navbar.width() + 60;
    let left = active_navbar.position().left;
    let indicator_left = indicator.position().left;
    if(indicator_left != left){
        indicator_ball.animate({ width: '20px' }, 100).queue(function() {
            $(this).animate({ width: '10px' }, 100)
            $(this).dequeue();
        });
        indicator.css({
            'width': width + 'px',
            'left': left + 'px',
        });
    }
    indicator.removeClass('d-none')
}

$('body').on('click', '.option', function(e) {
    let el = $(this)
    let el_class = el.attr("class").split(" ")[1];
    el_class = el_class.replace('_button','')
    $('html, body').animate({
        scrollTop: $('.'+el_class+'_section').offset().top - 100
    }, 100);
});
function toggleSideMenu() {
    // $('.side_menu').toggleClass('active')
    let menu = $('.side_menu')
    let menu_options = $('.side_menu_options')
    if (menu.hasClass('active')){
        menu_options.animate({ width: '0%' }, 200).queue(function() {
            menu.removeClass('active')
            $(this).dequeue();
        });
    }else{
        menu.addClass('active')
        menu_options.animate({ width: '70%' }, 200).queue(function() {
            $(this).dequeue();
        });
        // menu.addClass('active')
    }
}
$('body').on('click', '.side_menu_button', function() {
    toggleSideMenu() 
})
$('body').on('click', '.blur_background', function(e) {
    if (e.target === this) {
        toggleSideMenu()
    }
})
$('body').on('click', '#switch_mode', function() {
    let icons = $('#switch_mode i');
    
    icons.each(function() {
        let icon = $(this);
        icon.toggleClass('active')
    });
    $('#page').toggleClass('dark')
});