<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rizky Saputra | Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url('resources/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ url('resources/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('resources/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('resources/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ url('resources/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ url('resources/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ url('resources/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ url('resources/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url('resources/assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ url('resources/assets/css/custom.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="index.html">Rizky Saputra</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      {{-- <!-- <a href="index.html" class="mr-auto"><img src="{{url('resources/assets/img/logo.png')}}" alt="" class="img-fluid"></a> --> --}}
      <h2>I'm a passionate <span>web developer</span> from Batam</h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          <li><a class="nav-link" href="#projects">Projects</a></li>
          {{-- <li><a class="nav-link" href="#portfolio">Portfolio</a></li> --}}
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="twitter"><i class="bi bi-github"></i></a>
        <a href="#" class="facebook"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Get to know me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="{{ url('resources/assets/img/me.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>WEB Developer</h3>
          {{-- <p class="fst-italic">

          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>1 May 1995</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+123 456 7890</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>New York, USA</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>30</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>email@example.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
              </ul>
            </div>
          </div> --}}
          <p>
            I'm a passionate full stack <b>Web Developer</b> who willing to create the best product of Websites and Web Application. Check
            out on my <b><i> Portfolio </i></b> section.
          </p>
          <p>
            Finishing the diploma of Informatics Engineering at <b>Politeknik Negeri Batam</b>, while also working full time at a software
            house
            company as a QC Manager. Currently now i'm working at the new software house company as a fullstack <b>Web Developer</b>.
          </p>
          <p>
            I'm open to <b>Freelance job</b> opportunities that matches with my skills and experience where i can contribute, learn and
            grow. Don't
            hesitate to <b>contact</b> me.
          </p>
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            {{-- <i class="ri-store-line" style="color: #ffbb2c;"></i> --}}
            <img src="{{ url('resources/assets/img/logo/php.png') }}" class="img-logo" />
            <h3>PHP</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <img src="{{ url('resources/assets/img/logo/laravel.png') }}" class="img-logo" />
            <h3>Laravel</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <img src="{{ url('resources/assets/img/logo/js.png') }}" class="img-logo" />
            <h3>JS</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <img src="{{ url('resources/assets/img/logo/odoo.png') }}" class="img-logo" />
            <h3>Odoo</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <img src="{{ url('resources/assets/img/logo/react.png') }}" class="img-logo" />
            <h3>React Native</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <img src="{{ url('resources/assets/img/logo/mysql.png') }}" class="img-logo" />
            <h3>Mysql</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <img src="{{ url('resources/assets/img/logo/postgre.png') }}" class="img-logo" />
            <h3>PostgreSQL</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <img src="{{ url('resources/assets/img/logo/html.png') }}" class="img-logo" />
            <h3>HTML</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <img src="{{ url('resources/assets/img/logo/css.png') }}" class="img-logo" />
            <h3>CSS</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <img src="{{ url('resources/assets/img/logo/jquery.png') }}" class="img-logo" />
            <h3>JQuery</h3>
          </div>
        </div>
      </div>

    </div><!-- End Interests -->

  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>My Resume</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Education</h3>
          <div class="resume-item">
            <h4>Diploma of Informatics Engineering</h4>
            <h5>2019 - 2022</h5>
            <p><em>Politeknik Negeri Batam</em></p>
            <p>Taking the Informatics Engineering to upgrade my skill to be better than before. Doing some projects and creating the real
              product that useful for the University</p>
          </div>
          <div class="resume-item">
            <h4>Software Engineering Vocational School</h4>
            <h5>2014 - 2017</h5>
            {{-- <p><em>Rochester Institute of Technology, Rochester, NY</em></p> --}}
            <p>Learning all basic of software engineering, design, and programming. Focusing on the programming class than the others</p>
          </div>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Professional Experience</h3>
          <div class="resume-item">
            <h4>Web Developer</h4>
            <h5>2022 - Present</h5>
            <p><em>SGEEDE Corp., Batam</em></p>
            <p>
            <ul>
              <li>Meeting with client to discuss the.</li>
              <li>Create the workflow and flowchart until the client agreed.</li>
              <li>Develop numerous Web Application type (Sales, Accounting, Manufacturing, POS, etc.)</li>
              <li>Perform Quality Assurances and Deploy to production</li>
            </ul>
            </p>
          </div>
          <div class="resume-item">
            <h4>QA Manager</h4>
            <h5>2018 - 2022</h5>
            <p><em>Insoft Asia Teknologi, Batam </em></p>
            <p>
            <ul>
              <li>Receiving apps problem list from the team, and determine whether the problem is the apps error or client error</li>
              <li>Control all ticketed problem and set up the priority lists </li>
              <li>Supervise the Bug test and Stress test from team, and do the Final Test of all solved ticket to make sure the problem
                won't happen in the future</li>
              <li>Learn the new feature and teach the team about the new features and logic.</li>
              <li>Delegate daily task need to be done by the team.</li>
            </ul>
            </p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Projects Section ======= -->
  <section id="projects" class="projects">
    <div class="container">

      <div class="section-title">
        <h2>Projects</h2>
        <p>My Projects</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="projects-content">
              <div class="project-logo">
                <img src="https://www.elegan.co.id/resources/img/homepage/0-Main.png" class="img-projects-logo" />
              </div>
              <h4><a href="">Elegan.co.id</a></h4>
              <p>A Travel Agent's website application with booking system and admin's Dashboard</p>
            </div>
            <div class="text-hover" data-url="elegan.co.id"><i class="bi bi-rocket-takeoff-fill"></i>Visit </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Projects Section -->

  <!-- ======= Portfolio Section ======= -->
  {{-- <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Works</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{ url('resources/assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="{{ url('resources/assets/img/portfolio/portfolio-1.jpg') }}" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external"
                  class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{ url('resources/assets/img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="{{ url('resources/assets/img/portfolio/portfolio-2.jpg') }}" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external"
                  class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{ url('resources/assets/img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="{{ url('resources/assets/img/portfolio/portfolio-3.jpg') }}" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external"
                  class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{ url('resources/assets/img/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="{{ url('resources/assets/img/portfolio/portfolio-4.jpg') }}" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external"
                  class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{ url('resources/assets/img/portfolio/portfolio-5.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="{{ url('resources/assets/img/portfolio/portfolio-5.jpg') }}" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external"
                  class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{ url('resources/assets/img/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="{{ url('resources/assets/img/portfolio/portfolio-6.jpg') }}" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external"
                  class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{ url('resources/assets/img/portfolio/portfolio-7.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="{{ url('resources/assets/img/portfolio/portfolio-7.jpg') }}" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external"
                  class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{ url('resources/assets/img/portfolio/portfolio-8.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="{{ url('resources/assets/img/portfolio/portfolio-8.jpg') }}" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external"
                  class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{ url('resources/assets/img/portfolio/portfolio-9.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="{{ url('resources/assets/img/portfolio/portfolio-9.jpg') }}" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external"
                  class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section --> --}}

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">
        <div class="col-md-4 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="twitter"><i class="bi bi-github"></i></a>
              <a href="#" class="facebook"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p>rizkysptr3798@gmail.com</p>
          </div>
        </div>
        <div class="col-md-4 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>+62895 3658 74888</p>
          </div>
        </div>
      </div>

      <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>

    </div>
  </section><!-- End Contact Section -->

  <!-- Vendor JS Files -->
  <script src="{{ url('resources/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ url('resources/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('resources/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ url('resources/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ url('resources/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ url('resources/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ url('resources/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ url('resources/assets/js/jquery.min.js') }}"></script>
  <script src="{{ url('resources/assets/js/main.js') }}"></script>
  <script src="{{ url('resources/assets/js/custom.js') }}"></script>

</body>

</html>
