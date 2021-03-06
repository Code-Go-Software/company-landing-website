<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo"><a href="{{ route('home') }}">{{ $general->where('key', 'website_name')->first()->value }}</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">

                <ul>
                    <li class="active"><a href="{{ route('home') }}">Home</a></li>

                    <li class="drop-down"><a href="#">About</a>
                        <ul>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('team') }}">Team</a></li>
                            <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>

                </ul>

            </nav><!-- .nav-menu -->

            <a href="{{ route('home') }}" class="get-started-btn ml-auto">Get Started</a>

        </div>
    </header><!-- End Header -->

    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('about') }}">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('services') }}">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('team') }}">Our Team Members</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('testimonials') }}">Testimonials</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>{{ $general->where('key', 'website_name')->first()->value }}</h3>
                            <p>
                                {{ $general->where('key', 'address')->first()->value }}<br>
                                <strong>Phone:</strong> {{ $general->where('key', 'phone')->first()->value }}<br>
                                <strong>Email:</strong> {{ $general->where('key', 'email')->first()->value }}<br>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Follow Us On Social Media</h4>
                        <div class="social-links mt-3">
                            @foreach ($social_links as $link)
                                <a href="{{ $link->link }}" class="{{ $link->website }}"><i class="bx bxl-{{ $link->website }}"></i></a>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>{{ $general->where('key', 'website_name')->first()->value }}</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
