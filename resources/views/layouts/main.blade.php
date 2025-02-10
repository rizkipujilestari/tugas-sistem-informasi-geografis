<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Pray My Way</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  {{-- <link href="{{ asset('onepage/assets/img/favicon.png') }}" rel="icon"> --}}
  <link href="{{ asset('onepage/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('onepage/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('onepage/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('onepage/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('onepage/assets/vendor/glightbox/css/glightbox.min.css')}} " rel="stylesheet">
  <link href="{{ asset('onepage/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('onepage/assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: OnePage
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{ url('index.html') }}" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">Pray My Way</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home<br></a></li>
          <li><a href="{{ url('/') }}#about" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
          <li><a href="{{ url('/location') }}" class="{{ request()->is('location') ? 'active' : '' }}">Find Prayer Location</a></li>
          <li style="color: gray;">Prayer Time <sup>Coming Soon</sup> </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      {{-- <a class="btn-getstarted" href="#">Login</a> --}}

    </div>
  </header>

  <main class="main">
    @yield('content')
  </main>

  <footer id="footer" class="footer light-background">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Pray My Way</span>
          </a>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li>Prayer Place Finder</li>
            <li>Prayer Schedule</li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>Bandung, West Java</p>
          <p>Indonesia</p>
          <p>Phone: +62813 2222 8888</p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p><strong class="px-1 sitename">Pray My Way</strong> © <span>2025</span> - <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('onepage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('onepage/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('onepage/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('onepage/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('onepage/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('onepage/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('onepage/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('onepage/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('onepage/assets/js/main.js') }}"></script>

</body>

</html>