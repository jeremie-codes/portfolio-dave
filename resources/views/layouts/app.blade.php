    <!doctype html>
    <html lang="en">

    <head>
    <title>Cargo &mdash; Free Website Template by Free-Template.co</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Serrapide agency" />
    <link rel="shortcut icon" href="{{ asset('image/icon.png') }}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @stack('styles')

    </head>

    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
        </div>


        <div class="top-bar">
        <div class="container">
            <div class="row">
            <div class="col-12">
                <a href="mailto:{{ $link->email ?? '#' }}" class=""><span class="mr-2  icon-envelope-open-o"></span> <span class="d-none d-md-inline-block">{{ $link->email ?? '#' }}</span></a>
                <span class="mx-md-2 d-inline-block"></span>
                <a href="#" class=""><span class="mr-2  icon-phone"></span> <span class="d-none d-md-inline-block">+{{ $link->phone ?? '' }}</span></a>


                <div class="float-right">

                <a href="https://wa.me/{{ $link->phone ?? '#' }}?text=Je veux en savoir plus sur vos services!" class=""><span class="mr-2  icon-whatsapp"></span> <span class="d-none d-md-inline-block">Whatsapp</span></a>
                <span class="mx-md-2 d-inline-block"></span>
                <a href="{{ $link->facebook ?? '#' }}" class=""><span class="mr-2  icon-facebook"></span> <span class="d-none d-md-inline-block">Facebook</span></a>

                </div>

            </div>

            </div>

        </div>
        </div>

        <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center position-relative">


            <div class="site-logo">
                <a href="index.html" class="text-black"><span class="text-primary">Cargo</a>
            </div>

            <div class="col-12">
                <nav class="site-navigation text-right ml-auto " role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                    <li><a href="#home-section" class="nav-link">Home</a></li>
                    <li><a href="#services-section" class="nav-link">Services</a></li>


                    <li class="has-children">
                    <a href="#about-section" class="nav-link">About Us</a>
                    <ul class="dropdown arrow-top">
                        <li><a href="https://free-template.co" target="_blank" class="nav-link"><span class="text-primary">More Free Templates</span></a></li>
                        <li><a href="#team-section" class="nav-link">Team</a></li>
                        <li><a href="#pricing-section" class="nav-link">Pricing</a></li>
                        <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                        <li class="has-children">
                        <a href="#">More Links</a>
                        <ul class="dropdown">
                            <li><a href="#">Menu One</a></li>
                            <li><a href="#">Menu Two</a></li>
                            <li><a href="#">Menu Three</a></li>
                        </ul>
                        </li>
                    </ul>
                    </li>

                    <li><a href="#why-us-section" class="nav-link">Why Us</a></li>

                    <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                    <li><a href="#blog-section" class="nav-link">Blog</a></li>
                    <li><a href="#contact-section" class="nav-link">Contact</a></li>
                </ul>
                </nav>

            </div>

            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

            </div>
        </div>

        </header>

        @yield('content')

        <footer class="site-footer">
        <div class="container">
            <div class="row">
            <div class="col-md-6">
                <div class="row">
                <div class="col-md-7">
                    <h2 class="footer-heading mb-4">À propos de nous</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                </div>
                <div class="col-md-4 ml-auto">
                    <h2 class="footer-heading mb-4">Liens</h2>
                    <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>

                </div>
            </div>
            <div class="col-md-4 ml-auto">

                <div class="mb-5">
                <h2 class="footer-heading mb-4">Abonnez-vous à la newsletter</h2>
                <form action="#" method="post" class="footer-suscribe-form">
                    <div class="input-group mb-3">
                    <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Entrer l'Email" aria-label="Enter Email" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary text-white" type="button" id="button-addon2">S'abonner</button>
                    </div>
                    </div>
                </div>


                <h2 class="footer-heading mb-4">Suivez-nous</h2>
                    <a href="{{ $link->facebook ?? '#' }}" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                    <a href="{{ $link->twitter ?? '#' }}" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                    <a href="{{ $link->instagram ?? '#' }}" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                    <a href="{{ $link->email ?? '#' }}" class="pl-3 pr-3"><span class="icon-envelope-open-o"></span></a>
                </form>
            </div>
            </div>
            <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <div class="border-top pt-5">
                <p class="copyright">
                    <!-- Link back to Free-Template.co can't be removed. Template is licensed under CC BY 3.0. -->
                    &copy; <script>document.write(new Date().getFullYear());</script> <strong>Cargo</strong> Free Website Template. All Rights Reserved. Design by <a href="https://free-template.co/" target="_blank">Free-Template.co</a>
                </p>
                </div>
            </div>

            </div>
        </div>
        </footer>

    </div>

    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>


    </body>

    </html>
