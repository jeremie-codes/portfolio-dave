    <!doctype html>
    <html lang="en">

    <head>
        <title>Moke | portfolio</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="MOKEART Portfolio" />
        <link rel="shortcut icon" href="{{ asset('image/logo.png') }}" type="image/x-icon">

        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/barfiller.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        @stack('styles')

    </head>

    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>

        <!-- Offcanvas Menu Section Begin -->
        <div class="offcanvas-menu-overlay"></div>

        <div class="offcanvas-menu-wrapper">
            <div class="canvas-close">
                <i class="fa fa-close"></i>
            </div>
            <nav class="canvas-menu mobile-menu">
                <ul>
                    <li class="active"><a href="/">Accueil</a></li>
                    <li><a href="/about">À Propos</a></li>
                    <li><a href="/realisations">Realistions</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
            <div class="canvas-social">
                <a href="{{ $link['facebook'] ?? '#' }}"><i class="fa fa-facebook"></i></a>
                <a href="{{ $link['twitter'] ?? '#' }}"><i class="fa fa-twitter"></i></a>
                <a href="{{ $link['youtube'] ?? '#' }}"><i class="fa fa-youtube-play"></i></a>
                <a href="{{ $link['instagram'] ?? '#' }}"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <!-- Offcanvas Menu Section End -->

        <!-- Header Section Begin -->
        <header class="header-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="/">
                                <!-- <img src="img/logo.png" alt=""> -->
                                <h2><strong style="color: #fff">Moke<span style="color: #f36100">Art</span></strong></h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="nav-menu">
                            <ul>
                                <li class="active"><a href="/">Accueil</a></li>
                                <li><a href="/about">À Propos</a></li>
                                <li><a href="/realisations">Realistions</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <div class="top-option">
                            {{-- <div class="to-search search-switch">
                                <i class="fa fa-search"></i>
                            </div> --}}
                            <div class="to-social">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-youtube-play"></i></a>
                                <a href=""><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas-open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </header>
        <!-- Header End -->

        @if(session('success'))
            <div class="alert alert-success" style="position: fixed; top: 0; left: 0; right: 0; z-index: 1000;">
                <strong>{{ session('success') }}</strong>
            </div>
            <script>
                setTimeout(function() {
                    document.querySelector('.alert').style.display = 'none';
                }, 5000); // 5 seconds
            </script>
        @endif

        @if(session('error'))
            <div class="alert alert-danger" style="position: fixed; top: 0; left: 0; right: 0; z-index: 1000;">
                <strong>{{ session('error') }}</strong>
            </div>
            <script>
                setTimeout(function() {
                    document.querySelector('.alert').style.display = 'none';
                }, 5000); // 5 seconds
            </script>
        @endif

        @yield('content')

        <!-- Get In Touch Section Begin -->
        <div class="gettouch-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="gt-text">
                            <i class="fa fa-map-marker"></i>
                            <p>{{ $link['address'] ?? '#' }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gt-text">
                            <i class="fa fa-mobile"></i>
                            <ul>
                                <li>{{ $link['phone'] ?? '#' }}</li>
                                <li>{{ $link['phone2'] ?? '#' }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gt-text email">
                            <i class="fa fa-envelope"></i>
                            <p>{{ $link['email'] ?? '#' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Get In Touch Section End -->

        <!-- Footer Section Begin -->
        <section class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="fs-about">
                            <div class="fa-logo">
                                <a href="./index.html">
                                    <!-- <img src="img/logo.png" alt=""> -->
                                    <h2><strong style="color: #fff">Moke<span style="color: #f36100">Art</span></strong></h2>
                                    {{-- <img src="{{ asset('image/logo.png') }}" width="140" alt="Logo" class="img-fluid"> --}}
                                </a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore dolore magna aliqua endisse ultrices gravida lorem.</p>
                            <div class="fa-social">
                                <a href="{{ $link['facebook'] ?? '#' }}"><i class="fa fa-facebook"></i></a>
                                <a href="{{ $link['twitter'] ?? '#' }}"><i class="fa fa-twitter"></i></a>
                                <a href="{{ $link['youtube'] ?? '#' }}"><i class="fa fa-youtube-play"></i></a>
                                <a href="{{ $link['instagram'] ?? '#' }}"><i class="fa fa-instagram"></i></a>
                                <a href="mailto:{{ $link['email'] ?? '#' }}"><i class="fa  fa-envelope-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="fs-widget">
                            <h4>Autres Liens</h4>
                            <ul>
                                <li><a href="/">Accueil</a></li>
                                <li><a href="/about">À Propos</a></li>
                                <li><a href="/realisations">Réalisations</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="copyright-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://smartdev.siterdc.com" target="_blank">SmartDev</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer Section End -->

        <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.barfiller.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>


    </body>

    </html>
