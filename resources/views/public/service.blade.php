@extends('layouts.app')

@section('title', 'Articles - portfolio')

@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('assets/img/breadcrumb-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>PortFolio</h2>
                        <div class="bt-option">
                            <a href="./index.html">Accueil</a>
                            <span>Réalisations</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Mes Réalisations</span>
                        <h2>Tous mes travaux</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

        <!-- Gallery Section Begin -->
        <div class="gallery-section gallery-page pt-0">
            <div class="gallery">
                <div class="grid-sizer"></div>
                @foreach ($services as $service)
                <div class="gs-item set-bg" data-setbg="{{ asset('storage/' . $service->image ) }}">
                    <div class="thumb-icon bg-dark">
                        <style>
                            a {
                                color: #ffa600;
                            }
                            a:hover {
                                color: #f0bc5b;
                            }
                        </style>
                        <div class="text-center">
                            <a href="{{ asset('storage/' . $service->image ) }}" class="image-popup "><i class="fa fa-picture-o"></i></a> <br>
                            <a href="{{ route('realisation.show', $service->id ) }}" style="font-size: 18px">Explorer</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Gallery Section End -->

    <!-- Pricing Section Begin -->
    <section class="pricing-section service-pricing py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">

                    <a href="/contact" class="btn btn-outline-light p-3" style="text-decoration: none; font-size: 16px; width: 350px;">PASSEZ UNE COMMANDE</a>

                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

@endsection
