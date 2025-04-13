@extends('layouts.app')

@section('title', 'Accueil - Ser-Rapide')

@section('content')

    <div class="ftco-blocks-cover-1">
        <div class="ftco-cover-1 overlay" style="background-image: url({{ asset('image/banner.avif') }})">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1>Choisissez la qualité de livraison de votre cargaison</h1>
                    <p class="mb-5"><a href="{{ url('') }}" target="_blank">Ser-rapide</a> est à votre service !</p>
                    <div class="form-group">
                        <a href="#contact-section" class="btn btn-primary text-white py-3">Demander un dévis</a>
                    </div>
                </div>
            </div>
        </div>
        </div>


        <!-- END .ftco-cover-1 -->
        <div class="ftco-service-image-1 pb-5">
            <div class="container">
                <div class="owl-carousel owl-all">
                    @foreach ($categories as $category)
                        <div class="service text-center">
                            <div style="height: 230px; overflow: hidden; position: relative; margin-bottom: 20px;">
                                <a href="#services-section" style="height: 230px;">
                                    @if($category->image != '' || $category->image != null)
                                        <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->titre }}" class="img-fluid"  style="min-height: 230px;">
                                        <div style="position: absolute; top:0; left: 0; width: 100%; height: 100%; background: black; opacity: 0.2"></div>
                                    @else
                                        <img src="{{ asset('assets/images/cargo_sea_small.jpg') }}" alt="Image" class="img-fluid">
                                    @endif
                                </a>
                            </div>
                            <div class="px-md-3">
                                <h3><a href="#">{{ $category->name }}</a></h3>
                                <p>{!! \Illuminate\Support\Str::limit($category->description, 100, '...') !!}</</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

    <div class="site-section bg-light" id="services-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <div class="block-heading-1">
                        <h2>Ce que nous offrons</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                @foreach ($services as $service)
                    <div class="col-lg-4 my-2">
                        <div class="block__35630 p-0 col-lg-12">
                            <div class="icon mb-0" style="height: 200px; overflow: hidden;">
                                <a href="{{ route('services.show', $service->id) }}" class="icon mb-0" style="height: 100%;">
                                    @if($service->image != '' || $service->image != null)
                                        <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->titre }}" class="img-fluid"  style="min-height: 200px;">
                                    @else
                                        <img src="{{ asset('assets/images/cargo_sea_small.jpg') }}" alt="Image" class="img-fluid">
                                    @endif
                                </a>
                            </div>
                            <div class="px-3 py-3">
                                <div class="icon mb-0 d-flex justify-content-between align-items-center" style="height: 40px" >
                                    <a class="text-black col p-0" href="{{ route('services.show', $service->id) }}"
                                        style="position: relative; text-align: left;">
                                        <h2 class="col-12 p-0" style="position: relative; text-align: left; font-size: 20px;">
                                            {{ $service->titre }}
                                        </h2>
                                    </a>
                                    @if ($service->category->name == "Transport de Marchandise")
                                        <span style="font-size: 34px;" class="{{ $service->type == 'aérien' ? 'flaticon-airplane': 'flaticon-ferry' }}"></span>
                                    @elseif ($service->category->name == "Logistique et Gestion des stocks")
                                        <span style="font-size: 34px;" class="flaticon-box"></span>
                                    @else
                                        <span class="flaticon-warehouse"></span>
                                    @endif
                                </div>
                                <p>{!! \Illuminate\Support\Str::limit($service->description, 92, '...') !!}</p>
                            </div>
                        </div>
                    </div>
               @endforeach

            </div>
        </div>
    </div>

    <div class="site-section" id="about-section">

        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                        <h2>À propos de nous</h2>
                        @foreach ($abouts as $about)
                        {!! $about->description !!}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="site-section bg-light" id="about-section">
        <div class="container">
        <div class="row justify-content-center mb-4 block-img-video-1-wrap">
            <div class="col-md-12 mb-5">
                @if ($video->url ?? null)
                    <figure class="block-img-video-1" data-aos="fade">
                        <a href="{{ $video->url }}" data-fancybox data-ratio="2">
                            <span class="icon"><span class="icon-play"></span></span>
                            <img src="{{ $video->url }}" alt="url" class="img-fluid">
                        </a>
                    </figure>
                @elseif ($video->thumbnail ?? null)
                    <figure class="block-img-video-1" data-aos="fade">
                        <a href="{{ asset('storage/' . $video->thumbnail) }}" data-fancybox data-ratio="2">
                            <span class="icon"><span class="icon-play"></span></span>
                            <img src="{{ asset('storage/' . $video->thumbnail) }}" alt="thumbnail" class="img-fluid">
                        </a>
                    </figure>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-12">
            <div class="row">
                <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="">
                <div class="block-counter-1">
                    <span class="number">+<span data-number="02">0</span></span>
                    <span class="caption">Années d'expérience</span>
                </div>
                </div>
                <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="block-counter-1">
                    <span class="number">+<span data-number="04">0</span></span>
                    <span class="caption">Agences</span>
                </div>
                </div>
                <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="block-counter-1">
                    <span class="number">+<span data-number="04">0</span></span>
                    <span class="caption">Pays couverts</span>
                </div>
                </div>
                <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="block-counter-1">
                    <span class="number"><span data-number="24">0</span>h/7</span>
                    <span class="caption">Services Clients</span>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="site-section bg-light" id="pricing-section">
        <div class="container">
            <div class="row mb-5 justify-content-center text-center">
                <div class="col-md-7">
                <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                    <h2>Tarification</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                </div>
                </div>
            </div>

            <div class="row mb-5">
                @php
                    $row = 0;
                @endphp
               @foreach ($pricings as $pricing)
               @php
                    $row++;
                @endphp
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="">
                    <div class="pricing">
                        <h3 class="text-center text-black">{{ $pricing->title }}</h3>
                        <div class="price text-center mb-4 ">
                        <span>
                            À partir de <br>
                            <span style="font-size: 34px">${{ $pricing->price }}</span>
                            {{ $pricing->title == 'Audit logistique' ? '/Mois': '/Colis' }}
                        </span>
                        </div>
                        <ul class="list-unstyled ul-check success mb-5">
                            @foreach ($pricing->description as $descritption)
                            <li>{{ $descritption }}</li>
                            @endforeach
                        </ul>
                        <p class="text-center">
                        <a href="#" class="btn btn-md {{ $row == 2 ? 'btn-warning': 'btn-secondary' }}">Choisir</a>
                        </p>
                    </div>
                </div>
               @endforeach
            </div>

        </div>
    </div>

    <div class="block__73694 site-section border-top" id="why-us-section">
        <div class="container">
            <div class="row d-flex no-gutters align-items-stretch">

                <div class="col-12 col-lg-6 block__73422 order-lg-2" style="background-image: url({{ asset('assets/images/cargo_sea_small.jpg') }});" data-aos="fade-left" data-aos-delay="">
                </div>



                <div class="col-lg-5 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1" data-aos="fade-right" data-aos-delay="">
                <h2 class="mb-4 text-black">Pourquoi Nous ?</h2>
                <h4 class="text-primary">Nous travaillons rapidement et efficacement !</h4>

                <ul class="ul-check primary list-unstyled mt-5">
                    <li>Fret express</li>
                    <li>Rapidité d'exécution</li>
                    <li>Services sécurisés</li>
                    <li>Entreposage sécurisé</li>
                    <li>Économies de coûts</li>
                    <li>Prouvé par de grandes entreprises</li>
                </ul>

                </div>

            </div>
        </div>
    </div>

    <div class="site-section bg-light block-13" id="testimonials-section" data-aos="fade">
        <div class="container">

            <div class="text-center mb-5">
                <div class="block-heading-1">
                <h2>Clients satisfaits</h2>
                </div>
            </div>

            <div class="owl-carousel nonloop-block-13">
                @foreach ($testimonials as $testimanonial)
                    <div>
                        <div class="block-testimony-1 text-center">

                            <blockquote class="mb-4">
                                <p>&ldquo;
                                    {{ $testimanonial->comment }}
                                &rdquo;</p>
                            </blockquote>
                            <figure>
                                <p>{{ $testimanonial->service->titre }}</p>
                            </figure>
                            <h3 class="font-size-20 text-black">{{ $testimanonial->name ?? 'Anonyme' }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

    <div class="site-section bg-light" id="contact-section">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
              <div class="block-heading-1">
                <span>Entrer en contact</span>
                <h2>Contactez-nous</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="100">
              <form action="{{ route('contact.store') }}" method="post">
                @csrf
                <div class="form-group row">
                  <div class="col-md-12 mb-4 mb-lg-0">
                    <input type="text" name="name" id="name" required
                        class="form-control" placeholder="Nom complet">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <input type="email" name="email" id="email" required
                        class="form-control" placeholder="Adresse email ">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <input type="text" name="subject" id="subject" required
                        class="form-control" placeholder="Sujet ">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <textarea name="message" id="message" rows="4" required
                         class="form-control" placeholder="Ecrivez votre message." cols="30" rows="10"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6 mr-auto">
                    <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Envoyer le Message">
                  </div>
                </div>
              </form>
            </div>
            <div class="col-lg-6 ml-auto" data-aos="fade-up" data-aos-delay="200">
              <div class="bg-white p-3 p-md-5">
                <h3 class="text-black mb-4">Coordonnées</h3>
                <ul class="list-unstyled footer-link">
                  <li class="d-block mb-1">
                    <span class="d-block text-black">Adresses:</span>
                    @foreach ($adresses as $adresse)
                        . <span>{{ $adresse->data }}</span> <br>
                    @endforeach
                </li>
                <div class="mb-3 d-flex justify-content-between">
                    <li class="d-block mb-1">
                        <span class="d-block text-black">Téléphones:</span>
                        @foreach ($phones as $phone)
                            . <span>{{ $phone->data }}</span> <br>
                        @endforeach
                    </li>

                    <li class="d-block mb-1">
                        <span class="d-block text-black">Whatsapps:</span>
                        @foreach ($whatsapps as $whatsapp)
                            . <span>{{ $whatsapp->data }}</span> <br>
                        @endforeach
                    </li>
                </div>

                <li class="d-block mb-1">
                    <span class="d-block text-black">Emails:</span>
                    @foreach ($mails as $mail)
                        . <span>{{ $mail->data }}</span> <br>
                    @endforeach
                </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />
@endpush

@push('scripts')
@endpush
