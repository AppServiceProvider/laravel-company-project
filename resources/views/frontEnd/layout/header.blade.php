<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Company Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="{{asset('/frontEnd')}}/assets/img/favicon.png" rel="icon">
  <link href="{{asset('/frontEnd')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/frontEnd')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('/frontEnd')}}/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="{{asset('/frontEnd')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('/frontEnd')}}/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{asset('/frontEnd')}}/assets/vendor/venobox/venobox.css" rel="stylesheet">
  {{-- <link href="{{asset('/frontEnd')}}/assets/vendor/owl.carousel/owl.carousel.min.css" rel="stylesheet"> --}}
  <link href="{{asset('/frontEnd')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('/frontEnd')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/frontEnd')}}/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Company - v2.1.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
  
        <h1 class="logo mr-auto"><a href="index.html"><span>Com</span>pany</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="{{asset('/frontEnd')}}/assets/img/logo.png" alt="" class="img-fluid"></a>-->
  
        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="index.html">Home</a></li>
  
            <li class="drop-down"><a href="">About</a>
              <ul>
                <li><a href="about.html">About Us</a></li>
                <li><a href="team.html">Team</a></li>
                <li><a href="testimonials.html">Testimonials</a></li>
                <li class="drop-down"><a href="#">Deep Drop Down</a>
                  <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                  </ul>
                </li>
              </ul>
            </li>
  
            <li><a href="services.html">Services</a></li>
            <li><a href="{{route('portfolio')}}">Portfolio</a></li>
            <li><a href="pricing.html">Pricing</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contact.html">Contact</a></li>
            
  
          </ul>
        </nav><!-- .nav-menu -->
  
        <div class="header-social-links">
          {{-- <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
          <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
          <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
          <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a> --}}
          @if (Route::has('login'))
          <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
              @auth
                  <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">{{Auth::user()->name}}</a>
              @else
                  <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
  
                  @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                  @endif
              @endauth
          </div>
      @endif
        </div>
  
      </div>
    </header><!-- End Header -->
