@extends('layouts.app')

@section('title', 'À propos - portfolio')

@section('content')
      <!-- Breadcrumb Section Begin -->
      <section class="breadcrumb-section set-bg bg-dark" data-setbg="{{ asset('assets/img/breadcrumb-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>À Propos</h2>
                        <div class="bt-option">
                            <a href="/">Accueil</a>
                            <span>À Propos</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- About US Section Begin -->
    <section class="aboutus-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    @if ($abouts->count() > 0)
                        <div class="about-video set-bg" data-setbg="{{ asset('storage/' . $abouts->count() > 0 ? $abouts[0]->image : '' ) }}"></div>
                    @else
                        <div class="about-video set-bg" data-setbg=""></div>
                    @endif
                </div>
                <div class="col-lg-6 p-0">
                    <div class="about-text">
                        <div class="section-title">
                            <span>À Porpos de Moi</span>
                            <h2>Ce que vous devez savoir</h2>
                        </div>
                        <div class="at-desc">
                            @foreach ($abouts as $about)
                                <h3 class="text-light">{{ $about->title}}</h3>
                                {!! $about->description !!}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About US Section End -->


    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Temoignages</span>
                        <h2>clients Satisfaites</h2>
                    </div>
                </div>
            </div>
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
