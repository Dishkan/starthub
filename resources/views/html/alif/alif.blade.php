<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="copyright" content="MACode ID, https://macodeid.com/" />

    <title>StartHub</title>

    <link rel="stylesheet" href="../../assets/css/bootstrap.css" />

    <link rel="stylesheet" href="../../assets/css/maicons.css" />

    <link rel="stylesheet" href="../../assets/vendor/animate/animate.css" />

    <link
      rel="stylesheet"
      href="../../assets/vendor/owl-carousel/css/owl.carousel.css"
    />

    <link
      rel="stylesheet"
      href="../../assets/vendor/fancybox/css/jquery.fancybox.css"
    />

    <link rel="stylesheet" href="../../assets/css/theme.css" />
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
          <a style="font-size: 150%" href="{{url('/')}}" class="navbar-brand"
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
              <li class="nav-item">
              <a href="{{url('/')}}" class="nav-link">Main</a>
              </li>
              <li class="nav-item">
                <a href="{{url('/about')}}" class="nav-link">About</a>
              </li>
              <li class="nav-item">
                <a href="{{url('/areas')}}" class="nav-link">Areas</a>
              </li>
              <li class="nav-item">
                <a href="{{url('/projects')}}" class="nav-link">Projects</a>
              </li>
              <li class="nav-item">
                <a href="{{url('/news')}}" class="nav-link">News</a>
              </li>
              <li class="nav-item">
                <a href="{{url('/contact')}}" class="nav-link">Contact</a>
              </li>

              @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link">Dashboard</a>
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
              <img src="../../assets/img/finance/alif/alif.jfif" alt="" />
              <div class="img-caption">
                <h1 class="mb-4">Alif Tech</h1>
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
                We are <span class="fg-primary">Alif Tech</span></h2>

              <p>
                Subsidiary of Alif Holdings Limited, which is located in the UK. All our goals and ambitions are aimed at improving financial services based on good values ​​and information technology.
              </p>

              <a href="about.html" class="btn btn-primary mt-4" style="border-radius: 70px;">Read More</a>
            </div>
            <div class="col-lg-6 py-3">
              <div class="about-img">
                <img src="../../assets/img/finance/alif/about_alif.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- .page-section -->

      <div class="page-section">
        <div class="container">
          <div class="text-center">
            <div class="subhead">Our Products</div>
            <h2 class="title-section">
              See types of our products
            </h2>
          </div>

          <div class="row ">
            <div class="col">
                <div>
                  <img
                    style="height: 300px; width: 550px;"
                    src="../../assets/img/finance/alif/alifshop.png"
                    alt=""
                  />
                  <p class="mt-2" style="text-align:center;">
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
                  </p>
                </div>
            </div>
            <div class="col">
                  <div>
                    <img
                      style="height: 300px; width: 550px;"
                      src="../../assets/img/finance/alif/credits.png"
                      alt=""
                    />
                    <p class="mt-2" style="text-align:center;">
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
                      </p>
                  </div>
              </div>
          </div>



          <div class="row mt-5">
            <div class="col">
                <div>
                  <img
                    style="height: 300px; width: 550px;"
                    src="../../assets/img/finance/alif/merchant.png"
                    alt=""
                  />

                  <p class="mt-2" style="text-align:center;">
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
                  </p>

                </div>
            </div>
            <div class="col">
                  <div>
                    <img
                      style="height: 300px; width: 550px;"
                      src="../../assets/img/finance/alif/alifdelivery.png"
                      alt=""
                    />

                    <p class="mt-2" style="text-align:center;">
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
                      </p>
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
            <h2 class="title-section">Achivements</h2>
          </div>

          <div class="row my-5 card-blog-row">
            <div class="col-lg-6 py-6" style="text-align: center">
              <img
                style="width: 400px; height: 300px; border-radius: 80px"
                src="../../assets/img/finance/alif/investment.webp"
                alt=""
              />
            </div>
            <div class="col-lg-6 py-6 mt-5" style="text-align: center">
              <h2>$30 million</h2>
              <div class="row">
                <div class="col-lg-12 py-12">
                  <p style="font-size: 110%" class="mt-2">
                    Totally from venture investors and people's donations
                  </p>
                </div>
              </div>
            </div>
          </div>

        <hr> </hr>

          <div class="row my-5 card-blog-row">
            <div class="col-lg-6 py-6 mt-5" style="text-align: center">
              <h2>Top Rated Start Up</h2>
              <div class="row">
                <div class="col-lg-12 py-12">
                  <p  style="font-size: 110%" >
                    We got a lot of positive feedbacks from local people
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 py-6" style="text-align: center">
              <img
                style="width: 400px; height: 300px; border-radius: 80px"
                src="../../assets/img/finance/alif/rating.png"
                alt=""
              />
            </div>
          </div>


        </div>
        <!-- .container -->
      </div>

      <!-- Testimonials -->
      <div class="page-section">
        <div class="container">
            <div class="text-center">
                <h2 class="title-section">Testimonials</h2>
              </div>
          <div class="owl-carousel testimonial-carousel">
            <div class="card-testimonial">
              <div class="content">
                The quick, brown fox jumps over a lazy dog. DJs flock by when
                MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog,
                flick quartz, vex nymphs. Waltz, bad nymph
              </div>
              <div class="author">
                <div class="avatar">
                  <img src="../../assets/img/person/person_1.jpg" alt="" />
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
                  <img src="../../assets/img/person/person_2.jpg" alt="" />
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
                  <img src="../../assets/img/person/person_3.jpg" alt="" />
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
                  <img src="../../assets/img/person/person_1.jpg" alt="" />
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
                  <img src="../../assets/img/person/person_2.jpg" alt="" />
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
                  <img src="../../assets/img/person/person_3.jpg" alt="" />
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

    <script src="../../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../../assets/vendor/wow/wow.min.js"></script>

    <script src="../../assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>

    <script src="../../assets/vendor/isotope/isotope.pkgd.min.js"></script>

    <script src="../../assets/js/google-maps.js"></script>

    <script src="../../assets/js/theme.js"></script>

    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script> -->
  </body>
</html>
