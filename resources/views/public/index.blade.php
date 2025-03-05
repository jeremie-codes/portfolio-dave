@extends('layouts.app')

@section('title')
    SmartDev || Home
@endsection

@section('content')
    <!-- start revolution slider -->
    <section class="p-0 example home-startup bg-dark-slate-blue" style="">
        <article class="content" style="">
            <div id="rev_slider_26_1_wrapper" style="" class="rev_slider_wrapper fullscreen-container" data-alias="mask-showcase"
                data-source="gallery">
                <!-- Start revolution slider 5.4.1 fullscreen mode -->
                <div id="rev_slider_26_1" class="rev_slider fullscreenbanner" style="display:none; " data-version="5.4.1">
                    <ul>
                        <!-- start slide 01 -->
                        <li data-index="rs-73" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                            data-masterspeed="1500" data-thumb="{{ asset('image/about.jpg') }}"
                            data-rotate="0" data-saveperformance="off" data-title="01" data-param1="01" data-description="">
                            <!-- main image -->
                            <img src="{{ asset('image/about.jpg') }}" alt="" data-bgcolor="#262b32" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg"
                                data-no-retina>

                            <div class="opacity-full bg-gradient-fast-blue-purple z-index-0" style="opacity: 0.4;"></div>
                            <!-- <div class="overlay-bg bg-extra-dark-gray" style="opacity: 0.5;"></div> -->

                            <!-- main text layer -->
                            <div class="tp-caption tp-resizeme alt-font text-white font-weight-600 text-center"
                                id="slide-411-layer-01"
                                data-frames='[{"delay":200,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                data-type="text" data-whitespace="nowrap" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-50','-50','-115','-65']" data-width="auto" data-height="auto"
                                data-fontsize="['70','53','60','35']" data-lineheight="['70','59','70','39']"
                                data-letterspacing="['-2','-1','-1','-1']" data-responsive="on" data-responsive_offset="off"
                                data-paddingtop="['0','0','0','0']" data-paddingbottom="['15','8','8','8']"
                                data-paddingright="['0','0','0','0']" data-paddingleft="['0','0','0','0']"
                                style="text-shadow: 0 0 20px rgba(0,0,0,0.3);">Démarrez votre entreprise<br> en ligne
                                aujourd'hui</div>

                            <!-- small text layer -->
                            <div class="tp-caption tp-resizeme alt-font text-white font-weight-300 text-center"
                                id="slide-411-layer-02"
                                data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                data-type="text" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['65','100','-5','15']" data-width="auto" data-height="auto"
                                data-fontsize="['19','16','19','14']" data-lineheight="['28','14','23','20']"
                                data-letterspacing="['0.5','0.5','0.5','0.5']" data-responsive="off"
                                data-responsive_offset="on">La meilleur façon de promouvoir votre entreprise !</div>

                        </li>
                        <!-- end slide 01 -->
                        <!-- start slide 02 -->
                        <li data-index="rs-74" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                            data-masterspeed="1500" data-thumb="{{ asset('image/banner.jpg') }}"
                            data-rotate="0" data-saveperformance="off" data-title="02" data-param1="02" data-description="">
                            <!-- main image -->
                            <img src="{{ asset('image/banner.jpg') }}" alt="" data-bgcolor="#262b32" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg"
                                data-no-retina>

                            <!-- <div class="overlay-bg bg-extra-dark-gray" style="opacity: 0.5;"></div> -->
                            <div class="opacity-full bg-gradient-fast-blue-purple z-index-0" style="opacity: 0.4;"></div>

                            <!-- main text layer -->
                            <div class="tp-caption tp-resizeme alt-font text-white font-weight-600 text-center"
                                id="slide-411-layer-04"
                                data-frames='[{"delay":200,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                data-type="text" data-whitespace="nowrap" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-50','-50','-115','-65']" data-width="auto" data-height="auto"
                                data-fontsize="['70','53','60','35']" data-lineheight="['70','59','70','39']"
                                data-letterspacing="['-2','-1','-1','-1']" data-responsive="on" data-responsive_offset="off"
                                data-paddingtop="['0','0','0','0']" data-paddingbottom="['15','8','8','8']"
                                data-paddingright="['0','0','0','0']" data-paddingleft="['0','0','0','0']"
                                style="text-shadow: 0 0 20px rgba(0,0,0,0.3);">Combiner réflexion <br> et technique</div>

                            <!-- small text layer -->
                            <div class="tp-caption tp-resizeme alt-font text-white font-weight-300 text-center"
                                id="slide-411-layer-05"
                                data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                data-type="text" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['65','100','-5','15']" data-width="auto" data-height="auto"
                                data-fontsize="['19','13','19','14']" data-lineheight="['28','14','23','20']"
                                data-letterspacing="['0.5','0.5','0.5','0.5']" data-responsive="off"
                                data-responsive_offset="on">Laissez-vous plonger dans l'univers de Smart<span
                                    class="text-gradient-peacock-blue-crome-yellow-2">Dev's</span></div>
                        </li>
                        <!-- end slide 02 -->
                        <!-- start slide 03 -->
                        <li data-index="rs-75" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                            data-masterspeed="1500" data-thumb="{{ asset('image/banner-3.jpg') }}"
                            data-rotate="0" data-saveperformance="off" data-title="03" data-param1="03" data-description="">
                            <!-- main image -->
                            <img src="{{ asset('image/banner-3.jpg') }}" alt="" data-bgcolor="#262b32" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg"
                                data-no-retina>

                            <!-- <div class="overlay-bg bg-extra-dark-gray" style="opacity: 0.5;"></div> -->
                            <div class="opacity-full bg-gradient-fast-blue-purple z-index-0" style="opacity: 0.4;"></div>

                            <!-- main text layer -->
                            <div class="tp-caption tp-resizeme alt-font text-white font-weight-600 text-center"
                                id="slide-411-layer-07"
                                data-frames='[{"delay":200,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                data-type="text" data-whitespace="nowrap" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-50','-50','-115','-65']" data-width="auto" data-height="auto"
                                data-fontsize="['70','53','60','35']" data-lineheight="['70','59','70','39']"
                                data-letterspacing="['-2','-1','-1','-1']" data-responsive="on" data-responsive_offset="off"
                                data-paddingtop="['0','0','0','0']" data-paddingbottom="['15','8','8','8']"
                                data-paddingright="['0','0','0','0']" data-paddingleft="['0','0','0','0']"
                                style="text-shadow: 0 0 20px rgba(0,0,0,0.3);">Fournir des produits<br> numériques créatives
                            </div>

                            <!-- small text layer -->
                            <div class="tp-caption tp-resizeme alt-font text-white font-weight-300 text-center"
                                id="slide-411-layer-08"
                                data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                data-type="text" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['65','100','-5','15']" data-width="auto" data-height="auto"
                                data-fontsize="['19','13','19','14']" data-lineheight="['28','14','23','20']"
                                data-letterspacing="['0.5','0.5','0.5','0.5']" data-responsive="off"
                                data-responsive_offset="on">La meilleur façon de promouvoir votre entreprise !</div>
                        </li>
                        <!-- end slide 01 -->
                    </ul>
                </div>
            </div>
        </article>
        <div class="down-section text-center">
            <a href="#about"
                class="absolute-middle-center d-flex flex-column justify-content-center text-center w-90px h-90px rounded-circle bg-gradient-fast-blue-purple box-shadow-small mx-auto section-link xs-w-60px xs-h-60px">
                <i class="ti-mouse icon-extra-medium bounce text-white"></i>
            </a>
        </div>
    </section>
    <!-- end hero section -->

    <!-- start section -->
    <section class="big-section" id="about" style="background:url({{ asset('image/home-freelancer-bg-img-01.png') }}) no-repeat top 110px left;">
        <div class="container">
            <div class="row align-items-center justify-content-center z-index-0 position-relative">
                <div class="col-lg-4 col-md-7 text-center text-lg-start last-paragraph-no-margin md-margin-30px-bottom xs-margin-30px-top  wow animate__fadeIn"
                    data-wow-delay="0.2s">
                        <span class="alt-font font-weight-600 text-extra-dark-gray text-large text-uppercase d-block margin-20px-bottom">À propos de Smart<span class="text-gradient-fast-blue-purple ">Dev's</span></span>
                    <p class="text-large line-height-38px">
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
                        </span>, nous sommes fiers de créer des conceptions uniques, créatives et de qualité qui sont
                        développées selon les dernières
                        techniques de codage et de développement modernes.
                    </p>

                <a href="/about" class="btn btn-large btn-gradient-sky-blue-pink btn-slide-right-bg d-table d-lg-inline-block mt-3 lg-margin-15px-bottom md-margin-auto-lr">
                    En savoir plus
                    <span class="bg-dark-slate-blue"></span>
                </a>
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
    </section>
    <!-- end section -->

     {{-- <section class="no-padding-top wow animate__fadeIn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 padding-8-half-rem-lr xl-padding-five-lr lg-padding-two-lr sm-padding-15px-lr">
                    <div class="swiper overflow-hidden portfolio-classic position-relative swiper-pagination-bottom" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 26, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper">

                            <div class="col-sm-8 col-md-3 interactive-banners-style-09 lg-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                                <figure class="m-0">
                                    <img class="w-100" src="{{ asset('image/web.jpg') }}" alt="Illustration" />
                                    <div class="opacity-light bg-extra-dark-gray"></div>
                                    <div class="interactive-banners-overlay bg-transparent-gradient-fast-blue-purple"></div>
                                    <figcaption>
                                        <div class="interactive-banners-content align-items-start padding-4-half-rem-lr padding-5-rem-tb last-paragraph-no-margin xl-padding-2-rem-all lg-padding-4-rem-all xs-padding-5-rem-all">
                                            <span class="text-extra-medium text-white opacity-6 d-block margin-10px-bottom position-relative z-index-1">01</span>
                                            <h5 class="alt-font font-weight-600 text-white position-relative z-index-1">Conception <br /> Site Web</h5>
                                            <span class="interactive-banners-hover-icon"><i class="line-icon-Monitor-Laptop text-white icon-large"></i></span>
                                        </div>
                                        <div class="interactive-banners-hover-action align-items-end d-flex">
                                            <div class="padding-4-half-rem-lr padding-5-rem-tb last-paragraph-no-margin lg-padding-4-rem-all xl-padding-3-rem-all xs-padding-5-rem-all">
                                                <p class="interactive-banners-action-content w-80 lg-w-70">
                                                    <ul>
                                                        <li class="text-white opacity-6">Site E-Commerce</li>
                                                        <li class="text-white opacity-6">Site Vitrine</li>
                                                        <li class="text-white opacity-6">Portofolio</li>
                                                        <li class="text-white opacity-6">Blog</li>
                                                        <li class="text-white opacity-6">Autres...</li>
                                                    </ul>
                                                </p>
                                                <a href="https://wa.me/243827289636" class="btn btn-link btn-extra-large text-white margin-20px-top">Commandez</a>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-sm-8 col-md-3 interactive-banners-style-09 lg-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                                <figure class="m-0">
                                    <img class="w-100" src="{{ asset('image/web.jpg') }}" alt="Illustration" />
                                    <div class="opacity-light bg-extra-dark-gray"></div>
                                    <div class="interactive-banners-overlay bg-transparent-gradient-fast-blue-purple"></div>
                                    <figcaption>
                                        <div class="interactive-banners-content align-items-start padding-4-half-rem-lr padding-5-rem-tb last-paragraph-no-margin xl-padding-2-rem-all lg-padding-4-rem-all xs-padding-5-rem-all">
                                            <span class="text-extra-medium text-white opacity-6 d-block margin-10px-bottom position-relative z-index-1">01</span>
                                            <h5 class="alt-font font-weight-600 text-white position-relative z-index-1">Conception <br /> Site Web</h5>
                                            <span class="interactive-banners-hover-icon"><i class="line-icon-Monitor-Laptop text-white icon-large"></i></span>
                                        </div>
                                        <div class="interactive-banners-hover-action align-items-end d-flex">
                                            <div class="padding-4-half-rem-lr padding-5-rem-tb last-paragraph-no-margin lg-padding-4-rem-all xl-padding-3-rem-all xs-padding-5-rem-all">
                                                <p class="interactive-banners-action-content w-80 lg-w-70">
                                                    <ul>
                                                        <li class="text-white opacity-6">Site E-Commerce</li>
                                                        <li class="text-white opacity-6">Site Vitrine</li>
                                                        <li class="text-white opacity-6">Portofolio</li>
                                                        <li class="text-white opacity-6">Blog</li>
                                                        <li class="text-white opacity-6">Autres...</li>
                                                    </ul>
                                                </p>
                                                <a href="https://wa.me/243827289636" class="btn btn-link btn-extra-large text-white margin-20px-top">Commandez</a>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-sm-8 col-md-3 interactive-banners-style-09 lg-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                                <figure class="m-0">
                                    <img class="w-100" src="{{ asset('image/web.jpg') }}" alt="Illustration" />
                                    <div class="opacity-light bg-extra-dark-gray"></div>
                                    <div class="interactive-banners-overlay bg-transparent-gradient-fast-blue-purple"></div>
                                    <figcaption>
                                        <div class="interactive-banners-content align-items-start padding-4-half-rem-lr padding-5-rem-tb last-paragraph-no-margin xl-padding-2-rem-all lg-padding-4-rem-all xs-padding-5-rem-all">
                                            <span class="text-extra-medium text-white opacity-6 d-block margin-10px-bottom position-relative z-index-1">01</span>
                                            <h5 class="alt-font font-weight-600 text-white position-relative z-index-1">Conception <br /> Site Web</h5>
                                            <span class="interactive-banners-hover-icon"><i class="line-icon-Monitor-Laptop text-white icon-large"></i></span>
                                        </div>
                                        <div class="interactive-banners-hover-action align-items-end d-flex">
                                            <div class="padding-4-half-rem-lr padding-5-rem-tb last-paragraph-no-margin lg-padding-4-rem-all xl-padding-3-rem-all xs-padding-5-rem-all">
                                                <p class="interactive-banners-action-content w-80 lg-w-70">
                                                    <ul>
                                                        <li class="text-white opacity-6">Site E-Commerce</li>
                                                        <li class="text-white opacity-6">Site Vitrine</li>
                                                        <li class="text-white opacity-6">Portofolio</li>
                                                        <li class="text-white opacity-6">Blog</li>
                                                        <li class="text-white opacity-6">Autres...</li>
                                                    </ul>
                                                </p>
                                                <a href="https://wa.me/243827289636" class="btn btn-link btn-extra-large text-white margin-20px-top">Commandez</a>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-sm-8 col-md-3 interactive-banners-style-09 lg-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                                <figure class="m-0">
                                    <img class="w-100" src="{{ asset('image/web.jpg') }}" alt="Illustration" />
                                    <div class="opacity-light bg-extra-dark-gray"></div>
                                    <div class="interactive-banners-overlay bg-transparent-gradient-fast-blue-purple"></div>
                                    <figcaption>
                                        <div class="interactive-banners-content align-items-start padding-4-half-rem-lr padding-5-rem-tb last-paragraph-no-margin xl-padding-2-rem-all lg-padding-4-rem-all xs-padding-5-rem-all">
                                            <span class="text-extra-medium text-white opacity-6 d-block margin-10px-bottom position-relative z-index-1">01</span>
                                            <h5 class="alt-font font-weight-600 text-white position-relative z-index-1">Conception <br /> Site Web</h5>
                                            <span class="interactive-banners-hover-icon"><i class="line-icon-Monitor-Laptop text-white icon-large"></i></span>
                                        </div>
                                        <div class="interactive-banners-hover-action align-items-end d-flex">
                                            <div class="padding-4-half-rem-lr padding-5-rem-tb last-paragraph-no-margin lg-padding-4-rem-all xl-padding-3-rem-all xs-padding-5-rem-all">
                                                <p class="interactive-banners-action-content w-80 lg-w-70">
                                                    <ul>
                                                        <li class="text-white opacity-6">Site E-Commerce</li>
                                                        <li class="text-white opacity-6">Site Vitrine</li>
                                                        <li class="text-white opacity-6">Portofolio</li>
                                                        <li class="text-white opacity-6">Blog</li>
                                                        <li class="text-white opacity-6">Autres...</li>
                                                    </ul>
                                                </p>
                                                <a href="https://wa.me/243827289636" class="btn btn-link btn-extra-large text-white margin-20px-top">Commandez</a>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-sm-8 col-md-3 interactive-banners-style-09 lg-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                                <figure class="m-0">
                                    <img class="w-100" src="{{ asset('image/web.jpg') }}" alt="Illustration" />
                                    <div class="opacity-light bg-extra-dark-gray"></div>
                                    <div class="interactive-banners-overlay bg-transparent-gradient-fast-blue-purple"></div>
                                    <figcaption>
                                        <div class="interactive-banners-content align-items-start padding-4-half-rem-lr padding-5-rem-tb last-paragraph-no-margin xl-padding-2-rem-all lg-padding-4-rem-all xs-padding-5-rem-all">
                                            <span class="text-extra-medium text-white opacity-6 d-block margin-10px-bottom position-relative z-index-1">01</span>
                                            <h5 class="alt-font font-weight-600 text-white position-relative z-index-1">Conception <br /> Site Web</h5>
                                            <span class="interactive-banners-hover-icon"><i class="line-icon-Monitor-Laptop text-white icon-large"></i></span>
                                        </div>
                                        <div class="interactive-banners-hover-action align-items-end d-flex">
                                            <div class="padding-4-half-rem-lr padding-5-rem-tb last-paragraph-no-margin lg-padding-4-rem-all xl-padding-3-rem-all xs-padding-5-rem-all">
                                                <p class="interactive-banners-action-content w-80 lg-w-70">
                                                    <ul>
                                                        <li class="text-white opacity-6">Site E-Commerce</li>
                                                        <li class="text-white opacity-6">Site Vitrine</li>
                                                        <li class="text-white opacity-6">Portofolio</li>
                                                        <li class="text-white opacity-6">Blog</li>
                                                        <li class="text-white opacity-6">Autres...</li>
                                                    </ul>
                                                </p>
                                                <a href="https://wa.me/243827289636" class="btn btn-link btn-extra-large text-white margin-20px-top">Commandez</a>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>

                        </div>
                        <div class="swiper-button-previous-nav swiper-button-prev slider-navigation-style-03 rounded-circle center-prev"><i class="feather icon-feather-arrow-left"></i></div>
                        <div class="swiper-button-next-nav swiper-button-next slider-navigation-style-03 rounded-circle center-next"><i class="feather icon-feather-arrow-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- start section -->
    <section id="expertise" class="py-0 lg-padding-20px-lr xs-no-padding-lr">
        <div class="container-fluid padding-30px-lr xs-padding-15px-lr">
            <!-- <span class="alt-font font-weight-600 text-gradient-fast-blue-purple text-uppercase d-inline-block margin-15px-bottom">NosServices</span> -->
            <h1 class="alt-font font-weight-600 text-extra-dark-gray margin-6-rem-botom letter-spacing-minus-2px wow animate__fadeInRight" data-wow-delay="0.4s">
                <span class="text-border text-border-color-black text-border-width-2px opacity-3">Expertise</span>
            </h1>
            <div class="row row-cols-1 row-cols-xl-5 row-cols-md-2 justify-content-center">
                <!-- start interactive banner item -->
                <div class="col-sm-8 interactive-banners-style-09 lg-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                    <figure class="m-0">
                        <img class="w-100" src="{{ asset('image/web.jpg') }}" alt="Illustration" />
                        <div class="opacity-light bg-extra-dark-gray"></div>
                        <div class="interactive-banners-overlay bg-transparent-gradient-fast-blue-purple"></div>
                        <figcaption>
                            <div class="interactive-banners-content align-items-start padding-4-half-rem-lr padding-5-rem-tb last-paragraph-no-margin xl-padding-2-rem-all lg-padding-4-rem-all xs-padding-5-rem-all">
                                <span class="text-extra-medium text-white opacity-6 d-block margin-10px-bottom position-relative z-index-1">01</span>
                                <h5 class="alt-font font-weight-600 text-white position-relative z-index-1">Conception <br /> Site Web</h5>
                                <span class="interactive-banners-hover-icon"><i class="line-icon-Monitor-Laptop text-white icon-large"></i></span>
                            </div>
                            <div class="interactive-banners-hover-action align-items-end d-flex">
                                <div class="padding-4-half-rem-lr padding-5-rem-tb last-paragraph-no-margin lg-padding-4-rem-all xl-padding-3-rem-all xs-padding-5-rem-all">
                                    <p class="interactive-banners-action-content w-80 lg-w-70">
                                        <ul style="line-height: 18px">
                                            <li class="text-white opacity-6">Site E-Commerce</li>
                                            <li class="text-white opacity-6">Site Vitrine</li>
                                            <li class="text-white opacity-6">Portofolio</li>
                                            <li class="text-white opacity-6">Blog</li>
                                            <li class="text-white opacity-6">Autres...</li>
                                        </ul>
                                    </p>
                                    <a href="https://wa.me/243827289636" class="btn btn-link btn-extra-large text-white margin-20px-top">Commandez</a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!-- end interactive banner item -->
                <!-- start interactive banner item -->
                <div class="col-sm-8 interactive-banners-style-09 lg-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <figure class="m-0">
                        <img class="w-100" src="{{ asset('image/mobile.jpg') }}" alt="Illustration" />
                        <div class="opacity-light bg-extra-dark-gray"></div>
                        <div class="interactive-banners-overlay bg-transparent-gradient-fast-blue-purple"></div>
                        <figcaption>
                            <div class="interactive-banners-content align-items-start padding-4-half-rem-lr padding-5-rem-tb last-paragraph-no-margin xl-padding-2-rem-all lg-padding-4-rem-all xs-padding-5-rem-all">
                                <span class="text-extra-medium text-white opacity-6 d-block margin-10px-bottom position-relative z-index-1">02</span>
                                <h5 class="alt-font font-weight-600 text-white position-relative z-index-1">Conception <br />Apk Mobile</h5>
                                <span class="interactive-banners-hover-icon"><i class="line-icon-Smartphone-4 text-white icon-large"></i></span>
                            </div>
                            <div class="interactive-banners-hover-action align-items-end d-flex">
                                <div class="padding-4-half-rem-lr padding-5-rem-tb last-paragraph-no-margin lg-padding-4-rem-all xl-padding-3-rem-all xs-padding-5-rem-all">
                                    <p class="interactive-banners-action-content w-80 lg-w-70">
                                        <ul style="line-height: 18px">
                                            <li class="text-white opacity-6">E-Commerce App</li>
                                            <li class="text-white opacity-6">Messenger App</li>
                                            <li class="text-white opacity-6">Live stream App</li>
                                            <li class="text-white opacity-6">Autres App...</li>
                                        </ul>
                                    </p>
                                    <a href="https://wa.me/243827289636" class="btn btn-link btn-extra-large text-white margin-20px-top">Commandez</a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!-- end interactive banner item -->
                <!-- start interactive banner item -->
                <div class="col-sm-8 interactive-banners-style-09 sm-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.6s">
                    <figure class="m-0">
                        <img class="w-100" src="{{ asset('image/flyer.jpg') }}" alt="Illustration" />
                        <div class="opacity-light bg-extra-dark-gray"></div>
                        <div class="interactive-banners-overlay bg-transparent-gradient-fast-blue-purple"></div>
                        <figcaption>
                            <div class="interactive-banners-content align-items-start padding-4-half-rem-lr padding-5-rem-tb last-paragraph-no-margin xl-padding-2-rem-all lg-padding-4-rem-all xs-padding-5-rem-all">
                                <span class="text-extra-medium text-white opacity-6 d-block margin-10px-bottom position-relative z-index-1">03</span>
                                <h5 class="alt-font font-weight-600 text-white position-relative z-index-1">Conception <br /> Affiches</h5>
                                <span class="interactive-banners-hover-icon"><i class="line-icon-File-ClipboardTextImage text-white icon-large"></i></span>
                            </div>
                            <div class="interactive-banners-hover-action align-items-end d-flex">
                                <div class="padding-4-half-rem-lr padding-5-rem-tb last-paragraph-no-margin lg-padding-4-rem-all xl-padding-3-rem-all xs-padding-5-rem-all">
                                    <p class="interactive-banners-action-content w-80 lg-w-70">
                                        <ul style="line-height: 18px">
                                            <li class="text-white opacity-6">Conception Affiches</li>
                                            <li class="text-white opacity-6">Conception Bash</li>
                                            <li class="text-white opacity-6">Conception Flyer</li>
                                            <li class="text-white opacity-6">Conception Bannier</li>
                                            <li class="text-white opacity-6">Autres Conception...</li>
                                        </ul>
                                    </p>
                                    <a href="https://wa.me/243827289636" class="btn btn-link btn-extra-large text-white margin-20px-top">Commandez</a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!-- end interactive banner item -->
                <!-- start interactive banner item -->
                <div class="col-sm-8 interactive-banners-style-09 wow animate__fadeIn" data-wow-delay="0.8s">
                    <figure class="m-0">
                        <img class="w-100" src="{{ asset('image/logo.jpg') }}" alt="Illustration" />
                        <div class="opacity-light bg-extra-dark-gray"></div>
                        <div class="interactive-banners-overlay bg-transparent-gradient-fast-blue-purple"></div>
                        <figcaption>
                            <div class="interactive-banners-content align-items-start padding-4-half-rem-lr padding-5-rem-tb last-paragraph-no-margin xl-padding-2-rem-all lg-padding-4-rem-all xs-padding-5-rem-all">
                                <span class="text-extra-medium text-white opacity-6 d-block margin-10px-bottom position-relative z-index-1">04</span>
                                <h5 class="alt-font font-weight-600 text-white position-relative z-index-1">Conception <br />Logo</h5>
                                <span class="interactive-banners-hover-icon"><i class="line-icon-Ice-Cream text-white icon-large"></i></span>
                            </div>
                            <div class="interactive-banners-hover-action align-items-end d-flex">
                                <div class="padding-4-half-rem-lr padding-5-rem-tb lg-padding-4-rem-all last-paragraph-no-margin xl-padding-3-rem-all xs-padding-5-rem-all">
                                        <p class="interactive-banners-action-content w-80 lg-w-70">
                                        <ul style="line-height: 18px">
                                            <li class="text-white opacity-6">Logo Entreprise</li>
                                            <li class="text-white opacity-6">Logo Marque</li>
                                            <li class="text-white opacity-6">Autres Conception...</li>
                                        </ul>
                                    </p>
                                    <a href="https://wa.me/243827289636" class="btn btn-link btn-extra-large text-white margin-20px-top">Commandez</a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!-- end interactive banner item -->
                <!-- start interactive banner item -->
                <div class="col-sm-8 interactive-banners-style-09 wow animate__fadeIn" data-wow-delay="0.8s">
                    <figure class="m-0">
                        <img class="w-100" src="{{ asset('image/logo.jpg') }}" alt="Illustration" />
                        <div class="opacity-light bg-extra-dark-gray"></div>
                        <div class="interactive-banners-overlay bg-transparent-gradient-fast-blue-purple"></div>
                        <figcaption>
                            <div class="interactive-banners-content align-items-start padding-4-half-rem-lr padding-5-rem-tb last-paragraph-no-margin xl-padding-2-rem-all lg-padding-4-rem-all xs-padding-5-rem-all">
                                <span class="text-extra-medium text-white opacity-6 d-block margin-10px-bottom position-relative z-index-1">04</span>
                                <h5 class="alt-font font-weight-600 text-white position-relative z-index-1">Conception <br />Logo</h5>
                                <span class="interactive-banners-hover-icon"><i class="line-icon-Ice-Cream text-white icon-large"></i></span>
                            </div>
                            <div class="interactive-banners-hover-action align-items-end d-flex">
                                <div class="padding-4-half-rem-lr padding-5-rem-tb lg-padding-4-rem-all last-paragraph-no-margin xl-padding-3-rem-all xs-padding-5-rem-all">
                                        <p class="interactive-banners-action-content w-80 lg-w-70">
                                        <ul style="line-height: 18px">
                                            <li class="text-white opacity-6">Logo Entreprise</li>
                                            <li class="text-white opacity-6">Logo Marque</li>
                                            <li class="text-white opacity-6">Autres Conception...</li>
                                        </ul>
                                    </p>
                                    <a href="https://wa.me/243827289636" class="btn btn-link btn-extra-large text-white margin-20px-top">Commandez</a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!-- end interactive banner item -->
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="web-agency wow animate__fadeIn pb-0" id="avantages">
        <div class="container ">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-9 md-margin-3-rem-bottom">
                    <div class="col-12 p-0 margin-5-rem-bottom wow animate__fadeIn">
                        <!-- <span class="alt-font font-weight-600 text-gradient-fast-blue-purple text-uppercase d-inline-block margin-15px-bottom">Processus d'entreprise</span> -->
                        <span class="alt-font font-weight-600 text-gradient-fast-blue-purple text-uppercase d-inline-block margin-15px-bottom">Les avantages de travailler avec nous</span>
                        <!-- <div class="col-xl-4 col-lg-5 col-md-10 padding-9-rem-bottom xs-padding-6-rem-bottom order-1 order-lg-0"> -->
                        <h1 class="alt-font font-weight-600 text-extra-dark-gray margin-6-rem-botom letter-spacing-minus-2px wow animate__fadeInRight" data-wow-delay="0.4s">
                            <span class="text-border text-border-color-black text-border-width-2px opacity-3">Création</span><br /> d'un site web
                        </h1>
                        <!-- start feature box item -->
                        <div class="feature-box feature-box-left-icon overflow-hidden margin-4-rem-botto wow animate__fadeInRight"
                            data-wow-delay="0.5s">
                            <div class="feature-box-icon">
                                <i class="line-icon-Globe  icon-large text-gradient-peacock-blue-crome-yellow-2"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-600 text-extra-medium margin-10px-bottom d-block text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">
                                    Nom de domaine <span class="text-gradient-fast-blue-purple "> 1 an gratuit</span>
                                </span>
                                <p class="text-extra-medium line-height-32px md-w-75 xs-w-100">Béneficier de 12 mois gratuit sans payer le nom de domaine.</p>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="feature-box feature-box-left-icon overflow-hidden margin-4-rem-botto wow animate__fadeInRight" data-wow-delay="0.6s">
                            <div class="feature-box-icon">
                                <i class="line-icon-Server icon-large text-gradient-peacock-blue-crome-yellow-2"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-600 text-extra-medium margin-10px-bottom d-block text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">
                                    Hébergement <span class="text-gradient-fast-blue-purple ">1 an gratuit</span>
                                </span>
                                <p class="text-extra-medium line-height-32px md-w-75 xs-w-100">Béneficier de 12 mois gratuit sans payer pour l'hébergement de votre platforme.</p>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="feature-box feature-box-left-icon overflow-hidden wow animate__fadeInRight" data-wow-delay="0.7s">
                            <div class="feature-box-icon">
                                <i class="line-icon-Medal-3 icon-large text-gradient-peacock-blue-crome-yellow-2"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-600 text-extra-medium margin-10px-bottom d-block text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">
                                    Cértificat SSL <span class="text-gradient-fast-blue-purple "> gratuit et illimité</span>
                                </span>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="feature-box feature-box-left-icon overflow-hidden wow animate__fadeInRight" data-wow-delay="0.7s">
                            <div class="feature-box-icon">
                                <i class="line-icon-Worker icon-large text-gradient-peacock-blue-crome-yellow-2"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-600 text-extra-medium margin-10px-bottom d-block text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">
                                    Maintenance <span class="text-gradient-fast-blue-purple "> 1 mois gratuit</span>
                                </span>
                                <p class="text-extra-medium line-height-32px md-w-75 xs-w-100">Nous vous offrons une maintenance gratuit pendant 1 mois après la livraison du site.</p>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="feature-box feature-box-left-icon overflow-hidden wow animate__fadeInRight row justify-content-center" data-wow-delay="0.7s">
                            <a href="#" class="btn btn-large btn-gradient-sky-blue-pink btn-slide-right-bg d-table d-lg-inline-block mt-3 lg-margin-15px-bottom md-margin-auto-lr">
                                Commander
                                <span class="bg-dark-slate-blue"></span>
                            </a>
                        </div>
                        <!-- end feature box item -->
                    </div>
                </div>
                <div class="col-lg-6 offset-xl-1 wow animate__fadeInRight" data-wow-delay="0.5s">
                    <div class="outside-box-right position-relative">
                        <img src="{{ asset('image/desktop.jpg') }}" class="overflow-hidden" alt="Illustration" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="big-sectio pb-3 bg-gradient-white-light-gray pt-5" id="expertis">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-7 col-lg-7 d-flex flex-column flex-md-row align-self-end justify-content-center order-2 order-lg-0 text-center wow animate__fadeIn" data-wow-delay="0.2s">
                    <img class="position-relative left-minus-45px md-left-inherit" src="{{ asset('image/phone-burger.png') }}" alt="Illustration" />
                </div>
                <div class="col-xl-5 col-lg-5 col-md-10 padding-9-rem-bottom xs-padding-6-rem-bottom order-1 order-lg-0">
                    <h1 class="alt-font font-weight-600 text-extra-dark-gray margin-6-rem-bottm letter-spacing-minus-2px wow animate__fadeInRight"
                        data-wow-delay="0.4s"><span class="text-border text-border-color-black text-border-width-2px opacity-3">Création</span><br/> Appli. Mobile </h1>
                    <!-- start feature box item -->
                    <div class="feature-box feature-box-left-icon overflow-hidden margin-4-rem-botto wow animate__fadeInRight"
                        data-wow-delay="0.5s">
                        <div class="feature-box-icon">
                            <i class="line-icon-Smartphone-4 icon-large text-gradient-peacock-blue-crome-yellow-2"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font font-weight-600 text-extra-medium margin-10px-bottom d-block text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">Application sur mésure adaptées aux besoins spécifiques</span>
                            <p class="text-extra-medium line-height-32px md-w-75 xs-w-100">Nous créons des applications mobiles 100% personnalisées pour répondre précisément à vos besoins.</p>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="feature-box feature-box-left-icon overflow-hidden margin-4-rem-botto wow animate__fadeInRight"
                        data-wow-delay="0.6s">
                        <div class="feature-box-icon">
                            <i class="line-icon-Tablet-Phone icon-large text-gradient-peacock-blue-crome-yellow-2"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font font-weight-600 text-extra-medium margin-10px-bottom d-block text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">Design intuitif et expérience utilisateur (UX) de qualité</span>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="feature-box feature-box-left-icon overflow-hidden wow animate__fadeInRight"
                        data-wow-delay="0.7s">
                        <div class="feature-box-icon">
                            <i class="line-icon-Android icon-large text-gradient-peacock-blue-crome-yellow-2"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font font-weight-600 text-extra-medium margin-10px-bottom d-block text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">Optimisation pour toutes les plateformes (Android & iOS)</span>
                        </div>
                        <div class="feature-box-icon">
                            <i class="line-icon-iOS-Apple icon-large text-gradient-peacock-blue-crome-yellow-2"></i>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="feature-box feature-box-left-icon overflow-hidden wow animate__fadeInRight"
                        data-wow-delay="0.7s">
                        <div class="feature-box-icon">
                            <i class="line-icon-Cloud-Secure icon-large text-gradient-peacock-blue-crome-yellow-2"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font font-weight-600 text-extra-medium margin-10px-bottom d-block text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">
                                Sécurité renforcée pour protéger les données des utilisateurs
                            </span>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="feature-box feature-box-left-icon overflow-hidden wow animate__fadeInRight row justify-content-center" data-wow-delay="0.7s">
                        <a href="#" class="btn btn-large btn-gradient-sky-blue-pink btn-slide-right-bg d-table d-lg-inline-block mt-3 lg-margin-15px-bottom md-margin-auto-lr">
                            Commander
                            <span class="bg-dark-slate-blue"></span>
                        </a>
                    </div>
                    <!-- end feature box item -->
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="bg-light-blue py-5" id="realisations">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center margin-6-rem-bottom lg-margin-4-rem-bottom md-margin-3-rem-bottom wow animate__fadeIn">
                    <span class="alt-font font-weight-500 text-gradient-sky-blue-pink text-uppercase d-block margin-10px-bottom">Nos dernières réalisations</span>
                    <h5 class="alt-font font-weight-700 text-uppercase text-extra-dark-gray letter-spacing-minus-1px m-0">TRAVEAUX RÉCENTES</h5>
                </div>
            </div>
        </div>

        <div class="container-fluid padding-6-rem-lr md-padding-2-rem-lr xs-padding-15px-lr">
            <div class="row">
                <div class="col-12 filter-content">
                    <div class="container-fluid padding-six-lr">
                        <div class="row justify-content-center">
                            <div class="col-sm-10 col-lg-12 blog-content lg-no-padding-lr">
                                <ul class="blog-simple blog-wrapper grid grid-loading grid-3col xl-grid-2col lg-grid-2col md-grid-1col sm-grid-1col xs-grid-1col gutter-double-extra-large">
                                    <li class="grid-sizer"></li>
                                    <!-- start blog item -->
                                    <li class="grid-item wow animate__fadeIn">
                                        <div class="blog-post box-shadow-small border-radius-6px">
                                            <div class="blog-post-image cover-background xs-h-250px" style="background-image: url({{ asset('image/web.jpg') }})">
                                                <div class="opacity-light bg-extra-dark-gray"></div>
                                                <a href="blog-post-layout-01.html" class="blog-post-image-overlay bg-transparent-gradient-fast-blue-purple"></a>
                                                {{-- <div class="interactive-banners-overlay bg-transparent-gradient-fast-blue-purple"></div> --}}
                                            </div>
                                            <div class="post-details bg-white padding-3-half-rem-all lg-padding-2-half-rem-all md-padding-3-half-rem-all">
                                                <a href="blog-simple.html" class="blog-category alt-font text-extra-dark-gray text-yellow-ochre-light-hover border-color-black-transparent bg-white align-self-start margin-4-half-rem-bottom xs-margin-2-half-rem-bottom">Concept</a>
                                                <a href="blog-post-layout-02.html" class="font-weight-500 text-large line-height-24px text-extra-dark-gray text-yellow-ochre-light-hover margin-15px-bottom xs-margin-10px-bottom">Simplicity, wit, and good typography</a>
                                                <p>Lorem ipsum is simply dummy text printing...</p>
                                                <a href="blog-simple.html" class="alt-font font-weight-500 text-small text-yellow-ochre-light text-extra-dark-gray-hover text-uppercase align-self-start">Bill gardner</a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- end blog item -->
                                    <!-- start blog item -->
                                    <li class="grid-item wow animate__fadeIn" data-wow-delay="0.2s">
                                        <div class="blog-post box-shadow-small border-radius-6px">
                                            <div class="blog-post-image cover-background xs-h-250px" style="background-image: url({{ asset('image/real.jpg') }})">
                                                <a href="blog-post-layout-02.html" class="blog-post-image-overlay bg-transparent-gradient-fast-blue-purple"></a>
                                            </div>
                                            <div class="post-details bg-white padding-3-half-rem-all lg-padding-2-half-rem-all md-padding-3-half-rem-all">
                                                <a href="blog-simple.html" class="blog-category alt-font text-extra-dark-gray text-yellow-ochre-light-hover border-color-black-transparent bg-white align-self-start margin-4-half-rem-bottom xs-margin-2-half-rem-bottom">Concept</a>
                                                <a href="blog-post-layout-02.html" class="font-weight-500 text-large line-height-24px text-extra-dark-gray text-yellow-ochre-light-hover margin-15px-bottom xs-margin-10px-bottom">Simplicity, wit, and good typography</a>
                                                <p>Lorem ipsum is simply dummy text printing...</p>
                                                <a href="blog-simple.html" class="alt-font font-weight-500 text-small text-yellow-ochre-light text-extra-dark-gray-hover text-uppercase align-self-start">Bill gardner</a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- end blog item -->
                                </ul>
                                <div class="col-12 feature-box feature-box-left-icon overflow-hidden wow animate__fadeInRight row justify-content-center" data-wow-delay="0.7s">
                                    <a href="#" class="btn btn-large btn-gradient-sky-blue-pink btn-slide-right-bg d-table d-lg-inline-block mt-3 lg-margin-15px-bottom md-margin-auto-lr">
                                        Voir plus
                                        <span class="bg-dark-slate-blue"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section id="contact" class="big-section home-freelancer-bg-img wow animate__fadeIn" style="background:url({{ asset('image/home-freelancer-img-06.jpg') }}) no-repeat top left;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 d-flex flex-column md-margin-50px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                    <h1 class="alt-font font-weight-600 text-extra-dark-gray letter-spacing-minus-2px mb-lg-auto md-margin-5-rem-bottom"><span class="text-border text-border-color-black text-border-width-2px opacity-3">Démarrer</span><br />des projets?</h1>
                    <span class="alt-font font-weight-600 text-extra-medium text-extra-dark-gray text-uppercase d-block margin-25px-bottom">Nos Coordonnées</span>
                    <p class="mb-0">154 A Kongolo, C/ Kinsahsa,<br /> Réf: African'a palas Kinshasa, RDC</p>
                    <p><span class="font-weight-500 text-extra-dark-gray">Tel:</span> 243 827289636, 981857634 <br />
                        <span class="font-weight-500 text-extra-dark-gray">Email:</span> <a href="mailto:brian@domain.com" class="text-extra-dark-gray-hover">smartdev.cd@gmail.com</a></p>
                    <div class="social-icon-style-02">
                        <ul class="medium-icon">
                            <li class="m-0"><a class="facebook text-start" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li class="m-0"><a class="instagram text-start" href="http://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            <li class="m-0"><a class="twitter text-start" href="http://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                            <li class="m-0"><a class="dribbble text-start" href="http://wa.me/243827289636" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-8 wow animate__fadeIn" data-wow-delay="0.4s">
                    <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-5-rem-bottom letter-spacing-minus-1px">Contactez-nous</h5>
                    <form action="email-templates/contact-form.php" method="post">
                        <input class="input-border-bottom border-color-extra-light-gray large-input px-0 margin-25px-bottom border-radius-0px required" type="text" name="name" placeholder="Votre nom" />
                        <input class="input-border-bottom border-color-extra-light-gray large-input px-0 margin-25px-bottom border-radius-0px required" type="email" name="email" placeholder="Votre adresse email" />
                        <input class="input-border-bottom border-color-extra-light-gray large-input px-0 margin-25px-bottom border-radius-0px" type="tel" name="phone" placeholder="Téléhone" />
                        <textarea class="input-border-bottom border-color-extra-light-gray large-input px-0 margin-35px-bottom border-radius-0px" name="comment" rows="5" placeholder="Comment pouvons-nous vous aidez?"></textarea>
                        <input type="hidden" name="redirect" value="">
                        <button class="btn btn-medium btn-fancy btn-gradient-fast-blue-purple mb-0 submit" type="submit">Envoyer message</button>
                        <div class="form-results d-none"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start footer -->
    <footer class="footer-light padding-50px-tb border-top border-color-extra-light-gray bg-gradient-white-light-gray">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 order-2 order-lg-1 sm-margin-15px-bottom">
                    <ul class="footer-horizontal-link d-flex flex-column flex-sm-row justify-content-center justify-content-md-start text-center">
                        <li><a href="about-us.html" class="text-extra-dark-gray-hover">À propos</a></li>
                        <li><a href="our-services.html" class="text-extra-dark-gray-hover">Our services</a></li>
                        <li><a href="portfolio-switch-image-four-column.html" class="text-extra-dark-gray-hover">Work</a></li>
                        <li><a href="contact-us-classic.html" class="text-extra-dark-gray-hover">Contact us</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 order-1 order-lg-2 text-center md-margin-20px-bottom">
                    <a href="/" class="footer-logo"><img src="{{ asset('image/icon-b.png') }}" data-at2x="{{ asset('image/icon-b.png') }}" alt=""></a>
                </div>
                <div class="col-lg-5 col-md-6 order-3 text-center text-md-end last-paragraph-no-margin">
                    <form action="email-templates/subscribe-newsletter.php" method="post">
                        <div class="newsletter-style-03 position-relative ">
                            <input class="small-input border border-color-extra-light-gray rounded m-0 required" name="email"
                                placeholder="Entrez votre adresse email" type="email">
                            <input type="hidden" name="redirect" value="">
                            <button class="btn btn-gradient-fast-blue-purple rounded-end submit" type="submit">
                                <i class="feather icon-feather-mail icon-extra-small m-0"></i>
                            </button>
                            <div class="form-results rounded position-absolute d-none"></div>
                        </div>
                    </form>
                    <span class="alt-font font-weight-500 d-block">Inscrivez-vous à notre newsletter</span>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!-- start scroll to top -->
    <a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
    <!-- end scroll to top -->

@endsection
