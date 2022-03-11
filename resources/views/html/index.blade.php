<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>StartHub</title>

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/maicons.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/vendor/animate/animate.css')}}" />

    <link
      rel="stylesheet"
      href="{{asset('assets/vendor/owl-carousel/css/owl.carousel.css')}}"
    />

    <link
      rel="stylesheet"
      href="{{asset('assets/vendor/fancybox/css/jquery.fancybox.css')}}"
    />

    <link rel="stylesheet" href="{{asset('assets/css/theme.css')}}" />
  </head>
  <body>
    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
      <div class="top-bar">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-8">
              <div class="d-inline-block">
                <span class="mai-mail fg-primary"></span>
                <a href="mailto:DH.17@mail.ru">DH.17@mail.ru</a>
              </div>
              <div class="d-inline-block ml-2">
                <span class="mai-call fg-primary"></span>
                <a href="tel:+998997309656">+998997309656</a>
              </div>
            </div>
            <div class="col-md-4 text-right d-none d-md-block">
              <div class="social-mini-button">
                <a href="#"><span class="mai-logo-facebook-f"></span></a>
                <a href="#"><span class="mai-logo-twitter"></span></a>
                <a href="#"><span class="mai-logo-youtube"></span></a>
                <a href="#"><span class="mai-logo-linkedin"></span></a>
              </div>
            </div>
          </div>
        </div>
        <!-- .container -->
      </div>
      <!-- .top-bar -->

      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a style="font-size: 150%" href="index.html" class="navbar-brand"
            >Start<span class="text-primary">Hub</span></a
          >

          <button
            class="navbar-toggler"
            data-toggle="collapse"
            data-target="#navbarContent"
            aria-controls="navbarContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="navbar-collapse collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
              <li class="nav-item active">
                <a href="index.html" class="nav-link">Main</a>
              </li>
              <li class="nav-item">
                <a href="about.html" class="nav-link">About</a>
              </li>
              <li class="nav-item">
                <a href="services.html" class="nav-link">Areas</a>
              </li>
              <li class="nav-item">
                <a href="portfolio.html" class="nav-link">Projects</a>
              </li>
              <li class="nav-item">
                <a href="blog.html" class="nav-link">News</a>
              </li>
              <li class="nav-item">
                <a href="contact.html" class="nav-link">Contact</a>
              </li>

              @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link">Home</a>
                    </li>
                    @else
                    <li>
                    <a href="{{ route('login') }}" class="nav-link">Log in</a>
                    </li>
                        @if (Route::has('register'))
                        <li>
                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                        </li>
                        @endif
                    @endauth
            @endif

            </ul>
          </div>
        </div>
        <!-- .container -->
      </nav>
      <!-- .navbar -->

      <div class="page-banner home-banner mb-5">
        <div class="slider-wrapper">
          <div class="owl-carousel hero-carousel">
            <div class="hero-carousel-item">
              <img src="../assets/img/bg_image_1.jpg" alt="" />
              <div class="img-caption">
                <div class="subhead">
                  Do you have ideas, start up or business
                </div>
                <h1 class="mb-4">We can help you</h1>
                <a href="#services" class="btn btn-outline-light" style="border-radius: 70px;"
                  >Get Started</a
                >
              </div>
            </div>
            <div class="hero-carousel-item">
              <img src="../assets/img/bg_image_2.jpg" alt="" />
              <div class="img-caption">
                <h1 class="mb-4">
                  See statistics and reviews of your business
                </h1>
                <a href="#services" class="btn btn-outline-light" style="border-radius: 70px;"
                  >Get Started</a
                >
              </div>
            </div>
            <div class="hero-carousel-item">
              <img src="../assets/img/bg_image_3.jpg" alt="" />
              <div class="img-caption">
                <h1 class="mb-4">
                  Find like-minded people and those who will help you grow
                </h1>
                <a href="#services" class="btn btn-primary" style="border-radius: 70px;">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <!-- .slider-wrapper -->
      </div>
      <!-- .page-banner -->
    </header>

    <main>
      <div class="page-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 py-3">
              <div class="subhead">About Us</div>
              <h2 class="title-section">
                We are <span class="fg-primary">Professional Teams</span> to
                Growth your Business
              </h2>

              <p>
                But I must explain to you how all this mistaken idea of
                denouncing pleasure and praising pain was born and I will give
                you a complete account of the system, and expound the actual
                teachings of the great explorer of
              </p>

              <a href="about.html" class="btn btn-primary mt-4" style="border-radius: 70px;">Read More</a>
            </div>
            <div class="col-lg-6 py-3">
              <div class="about-img">
                <img src="../assets/img/about.jpg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- .page-section -->

      <div class="page-section">
        <div class="container">
          <div class="text-center">
            <div class="subhead">Our Services</div>
            <h2 class="title-section">
              See types of areas where you can publish your start up, ideas or
              business
            </h2>
          </div>

          <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
              <div class="text-center">
                <a href="sections/finance.html" style="color: black;">
                <div class="img-fluid mb-4">
                  <img
                    style="height: 60px; width: 60px"
                    src="../assets/img/icons/myicons/finance.svg"
                    alt=""
                  />
                </div>
                <h4>Finance</h4>
              </a>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
              <div class="text-center">
                <a href="portfolio.html" style="color: black;">
                <div class="img-fluid mb-4">
                  <img
                    style="height: 60px; width: 60px"
                    src="../assets/img/icons/myicons/education.svg"
                    alt=""
                  />
                </div>
                <h4>Education</h4>
              </a>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
              <div class="text-center">
                <a href="portfolio.html" style="color: black;">
                <div class="img-fluid mb-4">
                  <img
                    style="height: 60px; width: 60px"
                    src="../assets/img/icons/myicons/health-care.svg"
                    alt=""
                  />
                </div>
                <h4>Healthcare</h4>
              </a>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
              <div class="text-center">
                <a href="portfolio.html" style="color: black;">
                <div class="img-fluid mb-4">
                  <img
                    style="height: 60px; width: 60px"
                    src="../assets/img/icons/myicons/tourism.svg"
                    alt=""
                  />
                </div>
                <h4>Tourism</h4>
              </a>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
              <div class="text-center">
                <a href="portfolio.html" style="color: black;">
                <div class="img-fluid mb-4">
                  <img
                    style="height: 60px; width: 60px"
                    src="../assets/img/icons/myicons/services.svg"
                    alt=""
                  />
                </div>
                <h4>Services</h4>
              </a>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
              <div class="text-center">
                <a href="portfolio.html" style="color: black;">
                <div class="img-fluid mb-4">
                  <img
                    style="height: 60px; width: 60px"
                    src="../assets/img/icons/myicons/ecology.svg"
                    alt=""
                  />
                </div>
                <h4>Ecology</h4>
              </a>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
              <div class="text-center">
                <a href="portfolio.html" style="color: black;">
                <div class="img-fluid mb-4">
                  <img
                    style="height: 60px; width: 60px"
                    src="../assets/img/icons/myicons/game.svg"
                    alt=""
                  />
                </div>
                <h4>Games</h4>
              </a>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
              <div class="text-center">
                <a href="portfolio.html" style="color: black;">
                <div class="img-fluid mb-4">
                  <img
                    style="height: 60px; width: 60px"
                    src="../assets/img/icons/myicons/robotics.svg"
                    alt=""
                  />
                </div>
                <h4>Robotics</h4>
              </a>
              </div>
            </div>
          </div>
        </div>
        <!-- .container -->
      </div>
      <!-- .page-section -->



      <div class="page-section">
        <div class="container">
          <div class="text-center">
            <h2 class="title-section">How it works</h2>
          </div>

          <div class="row my-5 card-blog-row">
            <div class="col-lg-6 py-6" style="text-align: center">
              <img
                style="width: 400px; height: 300px; border-radius: 80px"
                src="../assets/img/steps/crowdfunding.jpg"
                alt=""
              />
            </div>
            <div class="col-lg-6 py-6 mt-5" style="text-align: center">
              <h2>Crowdfunding</h2>
              <div class="row">
                <div class="col-lg-12 py-12">
                  <p style="font-size: 110%" class="mt-2">
                    Our platform gives a chance to projects to give feedback,
                    reviews and investments from local people
                  </p>
                </div>
              </div>
            </div>
          </div>

        <hr> </hr>

          <div class="row my-5 card-blog-row">
            <div class="col-lg-6 py-6 mt-5" style="text-align: center">
              <h2>People Support</h2>
              <div class="row">
                <div class="col-lg-12 py-12">
                  <p  style="font-size: 110%" >
                    Anyone can be a part of your team if they are interested in
                    your project
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 py-6" style="text-align: center">
              <img
                style="width: 400px; height: 300px; border-radius: 80px"
                src="../assets/img/steps/support.jpg"
                alt=""
              />
            </div>
          </div>

          <hr> </hr>

          <div class="row my-5 card-blog-row">
            <div class="col-lg-6 py-6" style="text-align: center">
              <img
                style="width: 500px; height: 400px; border-radius: 80px"
                src="../assets/img/steps/mentoring.jpg"
                alt=""
              />
            </div>
            <div class="col-lg-6 py-6 mt-5" style="text-align: center">
              <h2>Business Mentors</h2>
              <div class="row">
                <div class="col-lg-12 py-12">
                  <p style="font-size: 110%">
                    You can find experts and experienced entrepreneurs and business people to get help and advice
                  </p>
                </div>
              </div>
            </div>
          </div>

          <hr> </hr>

          <div class="row my-5 card-blog-row">
            <div class="col-lg-6 py-6 mt-5" style="text-align: center">
              <h2>Events and Competitions</h2>
              <div class="row">
                <div class="col-lg-12 py-12">
                  <p style="font-size: 110%">
                    You can see winners of any local events and competitions and know why they win and others fail
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 py-6" style="text-align: center">
              <img
                style="width: 500px; height: 400px; border-radius: 80px"
                src="../assets/img/finance/alif/competition.jpg"
                alt=""
              />
            </div>
          </div>


        </div>
        <!-- .container -->
      </div>


      <div class="page-section">
        <div class="container">
          <div class="text-center">
            <div class="subhead">Our Teams</div>
            <h2 class="title-section">The Expert Team on StartHub</h2>
          </div>

          <div class="owl-carousel team-carousel mt-5">
            <div class="team-wrap">
              <div class="team-profile" style="border-radius: 70px;">
                <img src="../assets/img/teams/paiziev.png" alt="" />
              </div>
              <div class="team-content">
                <h5>Akmal Paiziev</h5>
                <div class="text-sm fg-grey">
                  Founder and CEO of Express24, MyTaxi, Workly
                </div>

                <div class="social-button">
                  <a style="width: 100%; border-radius: 70px;" href="#"><span class="mai-mail"></span></a>
                </div>
              </div>
            </div>

            <div class="team-wrap">
              <div class="team-profile" style="border-radius: 70px;">
                <img src="../assets/img/teams/akilova.png" alt="" />
              </div>
              <div class="team-content">
                <h5>Nigora Akilova</h5>
                <div class="text-sm fg-grey">Founder of Arzon Apteka</div>

                <div class="social-button">
                  <a style="width: 100%; border-radius: 70px;" href="#"><span class="mai-mail"></span></a>
                </div>
              </div>
            </div>

            <div class="team-wrap">
              <div class="team-profile" style="border-radius: 70px;">
                <img src="../assets/img/teams/adhamov.jpg" alt="" />
              </div>
              <div class="team-content">
                <h5>Laziz Adhamov</h5>
                <div class="text-sm fg-grey">
                  Founder of Bookcafe, Dalatek, Top-Contact
                </div>

                <div class="social-button">
                  <a style="width: 100%; border-radius: 70px;" href="#"><span class="mai-mail"></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- .container -->

        <div class="container">
          <div class="owl-carousel team-carousel mt-5">
            <div class="team-wrap">
              <div class="team-profile" style="border-radius: 70px;">
                <img src="../assets/img/teams/salikhov.jpg" alt="" />
              </div>
              <div class="team-content">
                <h5>Akmal Solikhov</h5>
                <div class="text-sm fg-grey">Founder of VRonica</div>

                <div class="social-button">
                  <a style="width: 100%; border-radius: 70px;" href="#"><span class="mai-mail"></span></a>
                </div>
              </div>
            </div>

            <div class="team-wrap">
              <div class="team-profile" style="border-radius: 70px;">
                <img src="../assets/img/teams/rashidov.jpg" alt="" />
              </div>
              <div class="team-content">
                <h5>Orian Mehroj Rashidov</h5>
                <div class="text-sm fg-grey">
                  Founder and CEO of Yoshtadbirkor University
                </div>

                <div class="social-button">
                  <a style="width: 100%; border-radius: 70px;" href="#"><span class="mai-mail"></span></a>
                </div>
              </div>
            </div>

            <div class="team-wrap">
              <div class="team-profile" style="border-radius: 70px;">
                <img src="../assets/img/teams/pulatov.jpeg" alt="" />
              </div>
              <div class="team-content">
                <h5>Jahongir Pulatov</h5>
                <div class="text-sm fg-grey">
                  Founder and CEO of Cambridge Learning Centre
                </div>

                <div class="social-button">
                  <a style="width: 100%; border-radius: 70px;" href="#"><span class="mai-mail"></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- .container -->
      </div>
      <!-- .page-section -->

      <div class="page-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 py-3">
              <h2 class="title-section">Top Rated Projects</h2>
            </div>
            <div class="col-md-6 py-3 text-md-right">
              <a href="portfolio.html" class="btn btn-outline-primary" style="border-radius: 70px;"
                >Browse Projects <span class="mai-arrow-forward ml-2"></span
              ></a>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-lg-4 py-3">
              <div class="portfolio">
                <a
                  href="../assets/img/portfolio/mentorme.png"
                  data-fancybox="portfolio"
                >
                  <img src="../assets/img/portfolio/mentorme.png" alt="" />
                </a>
              </div>
              <div class="row mt-3" style="text-align: center">
                <div class="col">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="red"
                    class="bi bi-star"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="red"
                    class="bi bi-star"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="red"
                    class="bi bi-star"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="red"
                    class="bi bi-star"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="red"
                    class="bi bi-star"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"
                    />
                  </svg>
                </div>
              </div>
            </div>

            <div class="col-lg-4 py-3">
              <div class="portfolio">
                <a
                  href="../assets/img/portfolio/work-2.jpg"
                  data-fancybox="portfolio"
                >
                  <img src="../assets/img/portfolio/work-2.jpg" alt="" />
                </a>
              </div>
              <div class="row mt-3" style="text-align: center">
                <div class="col">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="red"
                    class="bi bi-star"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="red"
                    class="bi bi-star"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"
                    />
                  </svg>

                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="red"
                    class="bi bi-star"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="red"
                    class="bi bi-star"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"
                    />
                  </svg>
                </div>
              </div>
            </div>
            <div class="col-lg-4 py-3">
              <div class="portfolio">
                <a
                  href="../assets/img/portfolio/work-3.jpg"
                  data-fancybox="portfolio"
                >
                  <img src="../assets/img/portfolio/work-3.jpg" alt="" />
                </a>
              </div>

              <div class="row mt-3" style="text-align: center">
                <div class="col">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="red"
                    class="bi bi-star"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="red"
                    class="bi bi-star"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"
                    />
                  </svg>

                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="red"
                    class="bi bi-star"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="red"
                    class="bi bi-star"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"
                    />
                  </svg>
                </div>
              </div>
            </div>
            <div class="col-lg-4 py-3">
              <div class="portfolio">
                <a
                  href="../assets/img/portfolio/work-4.jpg"
                  data-fancybox="portfolio"
                >
                  <img src="../assets/img/portfolio/work-4.jpg" alt="" />
                </a>
              </div>

              <div class="row mt-3" style="text-align: center">
                <div class="col">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="red"
                    class="bi bi-star"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="red"
                    class="bi bi-star"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"
                    />
                  </svg>

                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="red"
                    class="bi bi-star"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"
                    />
                  </svg>
                </div>
              </div>
            </div>
            <div class="col-lg-4 py-3">
              <div class="portfolio">
                <a
                  href="../assets/img/portfolio/work-5.jpg"
                  data-fancybox="portfolio"
                >
                  <img src="../assets/img/portfolio/work-5.jpg" alt="" />
                </a>
              </div>

              <div class="row mt-3" style="text-align: center">
                <div class="col">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="red"
                    class="bi bi-star"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="red"
                    class="bi bi-star"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"
                    />
                  </svg>

                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="red"
                    class="bi bi-star"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"
                    />
                  </svg>
                </div>
              </div>
            </div>
            <div class="col-lg-4 py-3">
              <div class="portfolio">
                <a
                  href="../assets/img/portfolio/work-6.jpg"
                  data-fancybox="portfolio"
                >
                  <img src="../assets/img/portfolio/work-6.jpg" alt="" />
                </a>
              </div>

              <div class="row mt-3" style="text-align: center">
                <div class="col">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="red"
                    class="bi bi-star"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="red"
                    class="bi bi-star"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"
                    />
                  </svg>

                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="red"
                    class="bi bi-star"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- .container -->
      </div>
      <!-- .page-section -->

      <!-- Testimonials -->
      <div class="page-section">
        <div class="container">
          <div class="owl-carousel testimonial-carousel">
            <div class="card-testimonial">
              <div class="content">
                The quick, brown fox jumps over a lazy dog. DJs flock by when
                MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog,
                flick quartz, vex nymphs. Waltz, bad nymph
              </div>
              <div class="author">
                <div class="avatar">
                  <img src="../assets/img/person/person_1.jpg" alt="" />
                </div>
                <div class="d-inline-block ml-2">
                  <div class="author-name">Sam Watson</div>
                  <div class="author-info">CEO - Mosh Elite Ltd.</div>
                </div>
              </div>
            </div>

            <div class="card-testimonial">
              <div class="content">
                The quick, brown fox jumps over a lazy dog. DJs flock by when
                MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog,
                flick quartz, vex nymphs. Waltz, bad nymph
              </div>
              <div class="author">
                <div class="avatar">
                  <img src="../assets/img/person/person_2.jpg" alt="" />
                </div>
                <div class="d-inline-block ml-2">
                  <div class="author-name">Edinson Alfa</div>
                  <div class="author-info">CEO - Mosh Elite Ltd.</div>
                </div>
              </div>
            </div>

            <div class="card-testimonial">
              <div class="content">
                The quick, brown fox jumps over a lazy dog. DJs flock by when
                MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog,
                flick quartz, vex nymphs. Waltz, bad nymph
              </div>
              <div class="author">
                <div class="avatar">
                  <img src="../assets/img/person/person_3.jpg" alt="" />
                </div>
                <div class="d-inline-block ml-2">
                  <div class="author-name">May Halloway</div>
                  <div class="author-info">CEO - Mosh Elite Ltd.</div>
                </div>
              </div>
            </div>

            <div class="card-testimonial">
              <div class="content">
                The quick, brown fox jumps over a lazy dog. DJs flock by when
                MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog,
                flick quartz, vex nymphs. Waltz, bad nymph
              </div>
              <div class="author">
                <div class="avatar">
                  <img src="../assets/img/person/person_1.jpg" alt="" />
                </div>
                <div class="d-inline-block ml-2">
                  <div class="author-name">Sam Watson</div>
                  <div class="author-info">CEO - Mosh Elite Ltd.</div>
                </div>
              </div>
            </div>

            <div class="card-testimonial">
              <div class="content">
                The quick, brown fox jumps over a lazy dog. DJs flock by when
                MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog,
                flick quartz, vex nymphs. Waltz, bad nymph
              </div>
              <div class="author">
                <div class="avatar">
                  <img src="../assets/img/person/person_2.jpg" alt="" />
                </div>
                <div class="d-inline-block ml-2">
                  <div class="author-name">Edinson Alfa</div>
                  <div class="author-info">CEO - Mosh Elite Ltd.</div>
                </div>
              </div>
            </div>

            <div class="card-testimonial">
              <div class="content">
                The quick, brown fox jumps over a lazy dog. DJs flock by when
                MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog,
                flick quartz, vex nymphs. Waltz, bad nymph
              </div>
              <div class="author">
                <div class="avatar">
                  <img src="../assets/img/person/person_3.jpg" alt="" />
                </div>
                <div class="d-inline-block ml-2">
                  <div class="author-name">May Halloway</div>
                  <div class="author-info">CEO - Mosh Elite Ltd.</div>
                </div>
              </div>
            </div>
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>
      <!-- .page-section -->

      <div class="page-section">
        <div class="container">
          <div class="text-center">
            <div class="subhead">News</div>
            <h2 class="title-section">Read Our Latest News</h2>
          </div>

          <div class="row my-5 card-blog-row">
            <div class="col-lg-3 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="entry-footer">
                    <img
                      style="width: 200px; height: 100px"
                      src="../assets/img/portfolio/work-1.jpg"
                      alt=""
                    />
                  </div>
                </div>
                <div class="body">
                  <div class="post-title">
                    <a href="blog-single.html">What is Business Management?</a>
                  </div>
                  <div class="post-excerpt">
                    Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit.Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit.
                  </div>
                </div>
                <div class="footer">
                  <a href="blog-single.html" style="border-radius: 70px;"
                    >Read More <span class="mai-chevron-forward text-sm"></span
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="entry-footer">
                    <img
                      style="width: 200px; height: 100px"
                      src="../assets/img/portfolio/work-1.jpg"
                      alt=""
                    />
                  </div>
                </div>
                <div class="body">
                  <div class="post-title">
                    <a href="blog-single.html">What is Business Management?</a>
                  </div>
                  <div class="post-excerpt">
                    Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit.Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit.
                  </div>
                </div>
                <div class="footer">
                  <a href="blog-single.html" style="border-radius: 70px;"
                    >Read More <span class="mai-chevron-forward text-sm"></span
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="entry-footer">
                    <img
                      style="width: 200px; height: 100px"
                      src="../assets/img/portfolio/work-1.jpg"
                      alt=""
                    />
                  </div>
                </div>
                <div class="body">
                  <div class="post-title">
                    <a href="blog-single.html">What is Business Management?</a>
                  </div>
                  <div class="post-excerpt">
                    Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit.Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit.
                  </div>
                </div>
                <div class="footer">
                  <a href="blog-single.html" style="border-radius: 70px;"
                    >Read More <span class="mai-chevron-forward text-sm"></span
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="entry-footer">
                    <img
                      style="width: 200px; height: 100px"
                      src="../assets/img/portfolio/work-1.jpg"
                      alt=""
                    />
                  </div>
                </div>
                <div class="body">
                  <div class="post-title">
                    <a href="blog-single.html">What is Business Management?</a>
                  </div>
                  <div class="post-excerpt">
                    Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit.Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit.
                  </div>
                </div>
                <div class="footer">
                  <a href="blog-single.html" style="border-radius: 70px;"
                    >Read More <span class="mai-chevron-forward text-sm"></span
                  ></a>
                </div>
              </div>
            </div>
          </div>

          <div class="text-center">
            <a href="blog.html" class="btn btn-primary" style="border-radius: 70px;">View More</a>
          </div>
        </div>
        <!-- .container -->
      </div>
      <!-- .page-section -->
    </main>

    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 py-3">
            <h3>Start<span class="fg-primary">Hub</span></h3>
          </div>
          <div class="col-lg-3 py-3">
            <h5>Contact Information</h5>
            <p>Tashkent Uzbekistan</p>
            <p>Email: DH.17@mail.ru</p>
            <p>Phone: +998997309656</p>
          </div>
          <div class="col-lg-3 py-3">
            <h5>Company</h5>
            <ul class="footer-menu">
              <li><a href="#">Career</a></li>
              <li><a href="#">Resources</a></li>
              <li><a href="#">News & Feed</a></li>
            </ul>
          </div>
          <div class="col-lg-3 py-3">
            <h5>Newsletter</h5>
            <form action="#">
              <input
                type="text"
                class="form-control"
                placeholder="Enter your email"
              />
              <button type="submit" class="btn btn-primary btn-sm mt-2" style="border-radius: 70px;">
                Submit
              </button>
            </form>
          </div>
        </div>

        <hr />

        <div class="row mt-4">
          <div class="col-md-6">
            <p>Copyright 2022</p>
          </div>
          <div class="col-md-6 text-right">
            <div class="sosmed-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-youtube"></span></a>
              <a href="#"><span class="mai-logo-linkedin"></span></a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>

    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

    <script src="{{asset('assets/vendor/wow/wow.min.js')}}"></script>

    <script src="{{asset('assets/vendor/fancybox/js/jquery.fancybox.min.js')}}"></script>

    <script src="{{asset('assets/vendor/isotope/isotope.pkgd.min.js')}}"></script>

    <script src="{{asset('assets/js/google-maps.js')}}"></script>

    <script src="{{asset('assets/js/theme.js')}}"></script>

    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script> -->
  </body>
</html>
