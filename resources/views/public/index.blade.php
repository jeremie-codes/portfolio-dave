@extends('layouts.app')

@section('title', 'Accueil - portfolio')

@section('content')


    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hs-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="{{ asset('assets/img/hero/hero-1.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <span>Artiste, Concepteur, Designer</span>
                                <h1><strong>Dave</strong> Moke</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor quos distinctio provident repudiandae voluptates aspernatur aliquam </p>
                                <a href="#" class="primary-btn">Parlons de votre projet <i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- ChoseUs Section Begin -->
    <section class="choseus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>À Porpos de Moi</span>
                        <h2>Ce que vous devez savoir</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="cs-item" style="width: 150px; height: 150px; overflow: hidden; border-radius: 100px;">
                        @if ($abouts->count() > 0)
                            <img src="{{ asset('storage/' . $abouts[0]->image) }}" alt="Profil" style="min-height: 150px; min-width: 150px">
                            {{-- {{ $abouts[0]->image }} --}}
                        @else
                            <img src="{{ asset('assets/img/team/team-2.jpg') }}" alt="Profil">
                        @endif
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="cs-item text-justify">
                        @if ($abouts->count() > 0)
                            <h4 class="text-light">{{ $abouts[0]->title }}</h4>
                            {!! $abouts[0]->description !!}
                        @endif
                    </div>
                </div>
                {{-- <div class="row pt-5"> --}}
                    <div class="col-lg-12 d-flex justify-content-center align-items-center">
                        <div>
                            <a href="/about" class="primary-btn btn-normal appoinment-btn">En Savoir plus</a>
                        </div>
                    </div>
                {{-- </div> --}}
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

    <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Mes Réalisations</span>
                        <h2>Travaux récents</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @php
                $i = 1;
                $e = 2;
                @endphp
                @foreach ($services as $service)
                <div class="col-lg-3 order-lg-{{ $i == 7 ? 8 : ($i == 5 ? 6 : $i) }} col-md-6 p-0">
                    <div class="ss-pic" style="height: 100%; overflow: hidden">
                        <img src='{{ asset("storage/" . $service->image) }}' alt="image" style="height: 100%">
                    </div>
                </div>
                <div class="col-lg-3 order-lg-{{ $e == 8 ? 7 : ($e == 6 ? 5 : $e) }} col-md-6 p-0">
                    <div class="ss-text {{ $e == 6 || $e == 8 ? 'second-row': '' }}">
                        <h4>{{ $service->titre }}</h4>
                        <h6 class="text-wite badge badge-warning">{{ $service->Category->name }}</h6>
                        {!! \Illuminate\Support\Str::limit($service->description, 85, '...') !!}
                    <br>
                        <a href="{{ route('realisation.show', $service->id) }}">Explorer</a>
                    </div>
                </div>
                @php
                $i += 2;
                $e += 2;
                @endphp
                @endforeach
            </div>
            <div class="row pt-5">
                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                    <div>
                        <a href="/realisations" class="primary-btn btn-normal appoinment-btn">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Banner Section Begin -->
    <section class="banner-section set-bg" data-setbg="{{ asset('assets/img/banner-bg.jpg') }}" style="height: 250px">
        <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="bs-text">
                            <h2>Temoignages</h2>
                            {{-- <div class="bt-tips"></div> --}}
                            <a href="#testimonials" class="primary-btn  btn-normal">clients Satisfaites <i class="fa fa-arrow-down" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad" id="testimonials">
        <div class="container">
            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Temoignages</span>
                        <h2>clients Satisfaites</h2>
                    </div>
                </div>
            </div> --}}
            <div class="ts_slider owl-carousel">
                @foreach ($testimonials as $testimanonial)
                    <div class="ts_item">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="ti_pic">
                                    <img src="{{ asset('storage/'.$testimanonial->service->image) }}" alt="">
                                    {{-- <p>{{ $testimanonial->service->titre }}</p> --}}
                                </div>
                                <div class="ti_text">
                                    <p>{{ $testimanonial->comment }}</p>

                                    <h5>{{ $testimanonial->name ?? 'Anonyme' }}</h5>
                                    <div class="tt-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />
@endpush

@push('scripts')
@endpush
