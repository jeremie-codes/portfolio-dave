@extends('layouts.app')

@section('title')
    SmartDev || About
@endsection

@section('content')
    <!-- start page title -->
    <section class="no-padding one-third-screen position-relative parallax wow animate__fadeIn" data-parallax-background-ratio="0.5" style="background-image: url(image/young.jpg);">
        <!-- <img src="image/about.jpg" alt="image" /> -->
        <div class="opacity-full bg-gradient-fast-blue-purple z-index-0" style="opacity: 0.4;"></div>
        <div class="h-100 border">
            <div class="row align-items-end justify-content-center h-100">
                <div class="col-xl-6 col-lg-7 col-md-10 position-relative page-title-large text-left">
                    <img src="{{ asset('image/icon.png') }}" alt="logo" width="300">
                    <span class="margin-5px-bottom alt-font text-white opacity-8 d-block">Ensemble, Travaillons vers une</span>
                    <h1 class="text-white alt-font font-weight-600 letter-spacing-minus-1 margin-5-rem-bottom sm-margin-3-rem-bottom">vision commune</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->

    <!-- start About -->
    <section class="big-section pb-0" id="about" style="background:url({{ asset('image/home-freelancer-bg-img-01.png') }}) no-repeat top 110px left;">
        <div class="container">
            <div class="row align-items-center justify-content-center z-index-0 position-relative">
                <div class="col-lg-4 col-md-7 text-center text-lg-start last-paragraph-no-margin md-margin-30px-bottom xs-margin-30px-top  wow animate__fadeIn"
                    data-wow-delay="0.2s">
                        <span class="alt-font font-weight-600 text-extra-dark-gray text-large text-uppercase d-block margin-20px-bottom">À propos de Smart<span class="text-gradient-fast-blue-purple ">Dev's</span></span>
                    <p class="line-height-38px">
                        Avec des années d'expérience dans le secteur
                        <span class="wow animate__fadeIn" data-wow-delay="0.2s">
                            <span
                                class="alt-font cd-headline slide font-weight-600 text-extra-dark-gray letter-spacing-minus-1px">
                                <span class="cd-words-wrapper d-initial p-0">
                                    <b class="text-gradient-fast-blue-purple border-width-2px border-bottom border-gradient-fast-blue-purple letter-spacing-minus-1px is-visible"> de la conception </b>
                                    <b class="text-gradient-fast-blue-purple border-width-2px border-bottom border-gradient-fast-blue-purple letter-spacing-minus-1px">du développement de sites Web </b>
                                    <b class="text-gradient-fast-blue-purple border-width-2px border-bottom border-gradient-fast-blue-purple letter-spacing-minus-1px">du développement des logiciels </b>
                                </span>
                            </span>
                        </span> , nous sommes fiers de créer des conceptions uniques, créatives et de qualité qui sont
                        développées selon les dernières
                        techniques de codage et de développement modernes.
                    </p>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6 col-sm-4 text-center text-sm-start text-md-end padding-3-half-rem-tb ps-sm-0 tilt-box lg-padding-5-rem-tb md-padding-7-rem-tb home-freelancer-bg-img sm-no-padding-tb wow animate__zoomIn"
                    data-wow-delay="0.4s"
                    data-tilt-options='{ "maxTilt": 20, "perspective": 1000, "easing": "cubic-bezier(.03,.98,.52,.99)", "scale": 1, "speed": 500, "transition": true, "reset": true, "glare": false, "maxGlare": 1 }'
                    style="background: url({{ asset('image/home-freelancer-img-05.png') }}) no-repeat;">
                    <span
                        class="text-big alt-font font-weight-600 text-uppercase text-extra-dark-gray image-mask cover-background letter-spacing-minus-10px md-letter-spacing-minus-5px xs-letter-spacing-minus-1-half"
                        style="background-image: url({{ asset('image/bg-text.jpg') }})">07</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 text-center text-sm-start wow animate__fadeInRight"
                    data-wow-delay="0.7s">
                    <h5
                        class="alt-font font-weight-300 text-extra-dark-gray text-uppercase w-90 mb-0 margin-15px-left xs-no-margin-left sm-w-100">
                        Années d'<span class="font-weight-700">experience</span> de travail</h5>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-12 text-left">
                <h1 class="alt-font font-weight-600 text-extra-dark-gray margin-6-rem-botom letter-spacing-minus-2px wow animate__fadeInRight" data-wow-delay="0.4s">
                    <span class="text-border text-border-color-black text-border-width-2px opacity-3">Nos </span> Valeurs
                </h1>
            </div>
        </div>
    </section>
    <!-- end About -->

    <!-- start section -->
    <section class="bg-extra-dark-gray fancy-box-background big-section cover-background p-0 wow animate__fadeIn" style="background-image: url({{ asset('image/ino.jpg') }});">
        <div class="opacity-very-light opacity-6 bg-extra-dark-gray"></div>
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-xl-4 row-cols-sm-2 align-items-center justify-content-center">
                <!-- start fancy text box item -->
                <div class="col p-0 fancy-box-item border-right border-color-dark-white-transparent lg-border-bottom xs-no-border-right wow animate__fadeIn" data-wow-delay="0.2s">
                    <div class="bg-banner-image cover-background" style="background-image: url({{ asset('image/about.jpg') }})">
                        <div class="opacity-very-light opacity-3 bg-black"></div>
                    </div>
                    <div class="fancy-text-box h-800px fancy-text-box-style-03 xl-h-500px xs-h-250px">
                        <div class="fancy-text-content padding-5-rem-lr padding-4-half-rem-tb xl-padding-2-rem-lr xl-padding-1-half-rem-tb lg-padding-4-rem-all">
                            <h6 class="alt-font font-weight-600 text-white text-uppercase margin-20px-bottom w-80 xl-w-100 lg-w-60 md-w-80">Transparence</h6>
                            <div class="fancy-text-box-bottom justify-content-center">
                                <div class="d-flex">
                                    <p class="m-0 align-self-center w-75 text-white opacity-6">Nous sommes toujours hônnete et ouvert envers nos clients en partageant sur l'avancement des projets.</p>
                                </div>
                            </div>
                            <div class="feature-box-overlay bg-yellow-ochre-light"></div>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col p-0 fancy-box-item border-right border-color-dark-white-transparent lg-border-bottom lg-no-border-right wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="bg-banner-image cover-background" style="background-image: url({{ asset('image/about.jpg') }})">
                        <div class="opacity-very-light opacity-3 bg-extra-dark-gray"></div>
                    </div>
                    <div class="fancy-text-box h-800px fancy-text-box-style-03 xl-h-500px xs-h-250px">
                        <div class="fancy-text-content padding-5-rem-lr padding-4-half-rem-tb xl-padding-2-rem-lr xl-padding-1-half-rem-tb lg-padding-4-rem-all">
                            <h6 class="alt-font font-weight-600 text-white text-uppercase margin-20px-bottom w-80 xl-w-100 lg-w-60 md-w-80">Excellence dans le service client</h6>
                            <div class="fancy-text-box-bottom justify-content-center">
                                <div class="d-flex">
                                    <p class="m-0 align-self-center w-100 text-white opacity-6">Nous avons mis en place des canaux de communication accessibles. pour résoudre rapidement les problèmes de nos clients et avec empathie.</p>
                                </div>
                            </div>
                            <div class="feature-box-overlay bg-yellow-ochre-light"></div>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col p-0 fancy-box-item border-right border-color-dark-white-transparent sm-border-bottom xs-no-border-right wow animate__fadeIn" data-wow-delay="0.6s">
                    <div class="bg-banner-image cover-background" style="background-image: url({{ asset('image/about.jpg') }})">
                        <div class="opacity-very-light opacity-3 bg-extra-dark-gray"></div>
                    </div>
                    <div class="fancy-text-box h-800px fancy-text-box-style-03 xl-h-500px xs-h-250px">
                        <div class="fancy-text-content padding-5-rem-lr padding-4-half-rem-tb xl-padding-2-rem-lr xl-padding-1-half-rem-tb lg-padding-4-rem-all">
                            <h6 class="alt-font font-weight-600 text-white text-uppercase margin-20px-bottom w-80 xl-w-100 lg-w-60 md-w-80">Innovation et amélioration continue</h6>
                            <div class="fancy-text-box-bottom justify-content-center">
                                <div class="d-flex">
                                    <p class="m-0 align-self-center w-75 text-white opacity-6">Nous encourageons une culture d'innovation en investissant dans la recherche et le développement.</p>
                                </div>
                            </div>
                            <div class="feature-box-overlay bg-yellow-ochre-light"></div>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col p-0 fancy-box-item wow animate__fadeIn" data-wow-delay="0.8s">
                    <div class="bg-banner-image cover-background" style="background-image: url({{ asset('image/about.jpg') }})">
                        <div class="opacity-very-light opacity-3 bg-extra-dark-gray"></div>
                    </div>
                    <div class="fancy-text-box h-800px fancy-text-box-style-03 xl-h-500px xs-h-250px">
                        <div class="fancy-text-content padding-5-rem-lr padding-4-half-rem-tb xl-padding-2-rem-lr xl-padding-1-half-rem-tb lg-padding-4-rem-all">
                            <h6 class="alt-font font-weight-600 text-white text-uppercase margin-20px-bottom w-80 xl-w-100 lg-w-60 md-w-80">Responsabilité social et éthique</h6>
                            <div class="fancy-text-box-bottom justify-content-center">
                                <div class="d-flex">
                                    <p class="m-0 align-self-center w-100 text-white opacity-6">Nous comptons nous engager dans des causes sociales et menons des actions en ligne avec avec des valeurs éthiques.</p>
                                </div>
                            </div>
                            <div class="feature-box-overlay bg-yellow-ochre-light"></div>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="parallax wow animate__fadeIn" data-parallax-background-ratio="0.5" style="background-image: url({{ asset('image/partenaire.jpg') }});">
        <div class="opacity-full bg-gradient-fast-blue-purple"></div>
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center">
                <div class="col-lg-11 box-shadow-medium align-items-center justify-content-center padding-6-rem-all md-padding-3-rem-all">
                    <div class="row align-items-center justify-content-center mx-lg-0">
                        <div class="col-md-6 fancy-text-box-style-01 text-center text-md-start md-margin-50px-bottom sm-margin-40px-tb">
                            <div class="fancy-text-box padding-3-half-rem-all md-padding-4-rem-all xs-padding-30px-all">
                                <div class="fancy-text-box-border-left border-color-extra-light-gray opacity-6"></div>
                                <h1 class="alt-font fancy-text-content font-weight-600 text-extra-dark-gray d-inline-block text-white align-middle letter-spacing-minus-5px xs-padding-30px-tb">07</h1>
                                <div class="alt-font text-extra-medium text-extra-dark-gray text-start d-inline-block align-middle text-white opacity-6 w-110px mx-auto line-height-20px position-relative top-minus-4px">Années d'expérience de travail</div>
                                <div class="fancy-text-box-border-right border-color-extra-light-gray opacity-6"></div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-md-6 col-sm-11 text-center text-md-start sm-margin-20px-tb" style="z-index: 999;">
                            <span class="alt-font d-block text-white opacity-6 margin-15px-bottom">Startup puissante pour la conception</span>
                            <h5 class="alt-font text-white font-weight-500 margin-30px-bottom  sm-margin-20px-bottom"><span class="font-weight-600">Devenez partenaire</span> de notre bonne entreprise</h5>
                            <p class="margin-40px-bottom sm-margin-30px-bottom text-white opacity-6">Lorem ipsum is simply dummy text of the printing and typesetting industry lorem ipsum is simply dummy text printing and typesetting.</p>
                            <a href="contact-us-modern.html" class="btn btn-medium btn-transparent-white btn-rounded btn-slide-right-bg">Devenir partenair<span class="bg-white"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection

