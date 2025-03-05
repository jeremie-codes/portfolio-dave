<html class="no-js" lang="en">
    <head>
        <title>SmartDev | Accueil</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="description" content="SmartDev, Votrre Startup qui apporte des solution optimal adaptées à vos besoins !">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="{{ asset('image/logo.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('image/logo.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('image/logo.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('image/logo.png') }}">
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-icons.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/theme-vendors.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}"/>
        <style>
            @media screen (min-width: 1000px) {
                .navbar-brand img {
                    width: 130px !important;
                }
            }
        </style>
        <!-- revolution slider -->
        <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/settings.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/layers.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/navigation.css') }}">
    </head>
    <body data-mobile-nav-style="classic">
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav
                class="navbar navbar-expand-lg navbar-dark bg-transparent header-light fixed-top navbar-boxed header-reverse-scroll">
                <div class="container-fluid nav-header-container">
                    <div class="col-auto col-sm-6 col-lg-2 me-auto ps-lg-0">
                        <a class="navbar-brand" href="/">
                            <img src="{{ asset('image/icon.png') }}" data-at2x="{{ asset('image/icon.png') }}" class="default-logo" alt="">
                            <img src="{{ asset('image/icon-b.png') }}" data-at2x="{{ asset('image/icon-b.png') }}" class="alt-logo" alt="">
                            <img src="{{ asset('image/icon-b.png') }}" data-at2x="{{ asset('image/icon-b.png') }}" class="mobile-logo" alt="">
                        </a>
                    </div>
                    <div class="col-auto col-lg-8 menu-order px-lg-0">
                        <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                            <ul class="navbar-nav alt-font">
                                <li class="nav-item megamenu">
                                    <a href="/" class="nav-link">Accueil</a>
                                </li>
                                <li class="nav-item megamenu">
                                    <a href="/about" class="nav-link">À Propos</a>
                                </li>
                                <li class="nav-item megamenu">
                                    <span data-link="{{ url('/#expertise') }}" class="nav-link btnlink">Expertise</span>
                                </li>
                                <li class="nav-item megamenu">
                                    <span data-link="{{ url('/#avantages') }}" class="nav-link btnlink">Avantages</span>
                                </li>
                                <li class="nav-item megamenu">
                                    <span data-link="{{ url('/#realisations') }}" class="nav-link btnlink">Réalisations</span>
                                </li>
                                <li class="nav-item megamenu">
                                    <span data-link="{{ url('/#contact') }}" class="nav-link btnlink">Contact</span>
                                </li>
                            </ul>
                            <script>
                                const allLink = document.querySelectorAll('.btnlink');
                                for (let i = 0; i < allLink.length; i++) {
                                    const link = allLink[i];
                                    link.addEventListener('click', () => document.location = link.getAttribute('data-link'));
                                }
                            </script>
                        </div>
                    </div>
                    <div class="col-auto col-lg-2 text-end pe-0 font-size-0">
                        <div class="header-search-icon search-form-wrapper">
                            <a href="javascript:void(0)" class="search-form-icon header-search-form"><i
                                    class="feather icon-feather-search"></i></a>
                            <!-- start search input -->
                            <div class="form-wrapper">
                                <button title="Close" type="button" class="search-close alt-font">×</button>
                                <form id="search-form" role="search" method="get" class="search-form text-start"
                                    action="/">
                                    <div class="search-form-box">
                                        <span class="search-label alt-font text-small text-uppercase text-medium-gray">Qu'est-ce que tu cherches?</span>
                                        <input class="search-input alt-font" id="search-form-input5e219ef164995"
                                            placeholder="Entrer le mot clé ..." name="s" value="" type="text"
                                            autocomplete="off">
                                        <button type="submit" class="search-button">
                                            <i class="feather icon-feather-search" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- end search input -->
                        </div>
                        <div class="header-push-button d-none d-lg-inline-block hidden-xs">
                            <a href="javascript:void(0);" class="push-button">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="push-menu padding-50px-lr bg-white">
                <a href="javascript:void(0);" class="close-menu text-extra-dark-gray text-green-hover"><i class="fa-solid fa-times"></i></a>
                <div class="push-menu-wrapper text-center" data-scroll-options='{ "theme": "dark" }'>
                    <h1
                        class="text-extra-dark-gray alt-font font-weight-700 letter-spacing-minus-3px text-uppercase no-margin-bottom">
                        Bonjour</h1>
                    <span class="alt-font text-green text-large text-uppercase d-block">Soyons amis.</span>
                    <div class="w-100">
                        <!-- <ul class="instafeed-grid instafeed-wrapper grid grid-3col xl-grid-3col lg-grid-3col md-grid-3col sm-grid-3col xs-grid-3col gutter-small" data-total="6"> -->
                        <a href="#" target="_blank">
                            <img src="{{ asset('image/logo-b.png') }}" data-src="{{ asset('image/logo-b.png') }}" class="insta-image" width="250"
                                alt="logo" />
                        </a>
                        <!-- </ul> -->
                    </div>
                    <div class="margin-5-rem-bottom text-center lg-margin-3-rem-bottom">
                        <span
                            class="alt-font text-large margin-3-rem-bottom w-70 mx-auto text-extra-dark-gray d-inline-block line-height-26px lg-margin-2-rem-bottom">Obtenez
                            la dernière mise à jour de nos applications de confiance</span>
                        <form action="email-templates/subscribe-newsletter.php" method="post">
                            <div class="newsletter-email position-relative">
                                <input class="border-radius-5px medium-input m-0 required" name="email"
                                    placeholder="Entre votre adresse email" type="email">
                                <input type="hidden" name="redirect" value="">
                                <button class="btn btn-medium line-height-18px submit" type="submit"><i
                                        class="fa-regular fa-envelope text-green left-icon"></i>S'ABONNER</button>
                                <div class="form-results rounded d-none position-absolute"></div>
                            </div>
                        </form>
                    </div>
                    <div class="text-center elements-social social-icon-style-05 margin-10px-bottom">
                        <ul class="small-icon">
                            <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i
                                        class="fa-brands fa-facebook-f"></i><span></span></a></li>
                            <li><a class="dribbble" href="http://wa.me/243827289636" target="_blank"><i
                                        class="fa-brands fa-whatsapp"></i><span></span></a></li>
                            <li><a class="twitter" href="http://www.twitter.com" target="_blank"><i
                                        class="fa-brands fa-twitter"></i><span></span></a></li>
                            <li><a class="instagram" href="http://www.instagram.com" target="_blank"><i
                                        class="fa-brands fa-instagram"></i><span></span></a></li>
                            <li><a class="linkedin" href="http://www.linkedin.com" target="_blank"><i
                                        class="fa-brands fa-linkedin-in"></i><span></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->

        @yield('content');

        <!-- javascript -->
        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/theme-vendors.min.js') }}"></script>
        <!-- revolution js files -->
        <script type="text/javascript" src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

        <script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>

        <script type="text/javascript">

            var revapi263, tpj;
            (function () {
                if (tpj === undefined) {
                    tpj = jQuery;
                    if ("off" == "on")
                        tpj.noConflict();
                }
                if (!/loaded|interactive|complete/.test(document.readyState))
                    document.addEventListener("DOMContentLoaded", onLoad);
                else
                    onLoad();
                    function onLoad() {

                        if (tpj("#rev_slider_26_1").revolution == undefined) {
                            revslider_showDoubleJqueryError("#rev_slider_26_1");
                        } else {
                            var revOffset = tpj(window).width() <= 991 ? '73px' : '';
                            revapi263 = tpj("#rev_slider_26_1").show().revolution({
                                sliderType: "standard",
                                jsFileLocation: "{{ asset('revolution/js/') }}",
                                // sliderLayout: "fullscreen",
                                dottedOverlay: "none",
                                delay: 4500,
                                navigation: {
                                    keyboardNavigation: "on",
                                    keyboard_direction: "horizontal",
                                    mouseScrollNavigation: "off",
                                    mouseScrollReverse: "default",
                                    onHoverStop: "off",
                                    touch: {
                                        touchenabled: "on",
                                        touchOnDesktop: "on",
                                        swipe_threshold: 75,
                                        swipe_min_touches: 1,
                                        swipe_direction: "horizontal",
                                        drag_block_vertical: false
                                    },
                                    arrows: {
                                        enable: true,
                                        style: 'ares',
                                        tmp: '',
                                        rtl: false,
                                        hide_onleave: false,
                                        hide_onmobile: true,
                                        hide_under: 767,
                                        hide_over: 9999,
                                        hide_delay: 0,
                                        hide_delay_mobile: 0,

                                        left: {
                                            container: 'slider',
                                            h_align: 'left',
                                            v_align: 'center',
                                            h_offset: 60,
                                            v_offset: 0
                                        },

                                        right: {
                                            container: 'slider',
                                            h_align: 'right',
                                            v_align: 'center',
                                            h_offset: 60,
                                            v_offset: 0
                                        }
                                    },
                                    bullets: {
                                        enable: true,
                                        style: 'zeus',
                                        direction: 'horizontal',
                                        rtl: false,

                                        container: 'slider',
                                        h_align: 'center',
                                        v_align: 'bottom',
                                        h_offset: 0,
                                        v_offset: 30,
                                        space: 7,

                                        hide_onleave: false,
                                        hide_onmobile: false,
                                        hide_under: 0,
                                        hide_over: 767,
                                        hide_delay: 200,
                                        hide_delay_mobile: 1200
                                    },
                                },
                                responsiveLevels: [1240, 1025, 778, 480],
                                visibilityLevels: [1920, 1500, 1025, 768],
                                gridwidth: [1200, 991, 778, 480],
                                gridheight: [680, 680, 680, 680],
                                lazyType: "none",
                                shadow: 0,
                                spinner: "spinner4",
                                stopLoop: "off",
                                stopAfterLoops: -1,
                                stopAtSlide: -1,
                                shuffle: "off",
                                autoHeight: "on",
                                fullScreenAutoWidth: "on",
                                fullScreenAlignForce: "off",
                                fullScreenOffsetContainer: "",
                                fullScreenOffset: revOffset,
                                disableProgressBar: "on",
                                hideThumbsOnMobile: "off",
                                hideSliderAtLimit: 0,
                                hideCaptionAtLimit: 0,
                                hideAllCaptionAtLimit: 0,
                                debugMode: false,
                                fallbacks: {
                                    simplifyAll: "off",
                                    nextSlideOnWindowFocus: "off",
                                    disableFocusListener: false,
                                }
                            });
                        }
                        ; /* END OF revapi call */
                    }
                    ; /* END OF ON LOAD FUNCTION */
                 }()); /* END OF WRAPPING FUNCTION */

        </script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-93NGDNYKNY"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-93NGDNYKNY');
        </script>
    </body>
</html>
