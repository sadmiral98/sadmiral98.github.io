$(document).ready(function () {
    $(".text-hover").click(function (event) {
        var url = $(this).data("url");
        window.open("http://" + url, "_blank");
    });
});
