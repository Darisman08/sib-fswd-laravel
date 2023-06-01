<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="land/img/favicon.png" rel="icon">
    <link href="land/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="land/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="land/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="land/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="land/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="land/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="land/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="land/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="land/css/style.css" rel="stylesheet">

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-inner-pages">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="/">SIB FSWD Laravel</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="land/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto {{ request()->url('/') == url('/') ? 'active' : '' }}"
                            href="{{ url('/') }}">Home</a></li>
                    @auth

                        <li><a class="nav-link scrollto {{ request()->url('/dashboard') == url('/dashboard') ? 'active' : '' }}"
                                href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li class="dropdown"><a
                                class="{{ request()->url('/dfproduk') == url('/dfproduk') ? 'active' : '' }}"
                                href="#"><span>Produk</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="{{ url('/dfproduk') }}">Daftar Produk</a></li>
                    @endauth
                    @auth
                                @if (auth()->user()->grup_id == 1)
                                    <li><a href="{{ url('/kategori') }}">Kategori Produk</a></li>
                                @endif
                            </ul>
                        </li>
                    @endauth
                        
                    @auth
                        @if (auth()->user()->grup_id == 1 || auth()->user()->grup_id == 2)
                            <li class="dropdown"><a
                                    class="{{ request()->url('/dfpengguna') == url('/dfpengguna') ? 'active' : '' }}"
                                    href="#"><span>Pengguna</span> <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="{{ url('/dfpengguna') }}">Daftar Pengguna</a></li>
                        @endif
                    @endauth
                    @auth
                        @if (auth()->user()->grup_id == 1)
                            <li><a href="{{ url('/grpengguna') }}">Kategori Pengguna</a></li>
                    </ul>
                    </li>
                        @elseif (auth()->user()->grup_id == 2)
                    </ul>
                    </li>
                        @endif
                    @endauth
                    @auth
                    <li><a class="nav-link scrollto " href="">{{ auth()->user()->nama }}</a></li>
                    <li><a href="{{ url('/logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                             class="nav-link scrollto">Logout</a></li>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    @else
                    <li><a class="nav-link scrollto {{ request()->url('/login') == url('/login') ? 'active' : '' }}"
                            href="/login">Login</a></li>

                    @endauth
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    @yield('content')
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>SIB FSWD Laravel</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/SIB FSWD Laravel-free-simple-html-template-for-corporate/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="land/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="land/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="land/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="land/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="land/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="land/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="land/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="land/js/main.js"></script>

</body>

</html>
