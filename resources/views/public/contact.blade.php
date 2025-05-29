@extends('layouts.app')

@section('title', 'Contact - portfolio')

@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('assets/img/breadcrumb-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Contact Us</h2>
                        <div class="bt-option">
                            <a href="./index.html">Home</a>
                            <a href="#">Pages</a>
                            <span>Contact us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title contact-title">
                        <span>Contactez-moi</span>
                        <h2>Prise de contact</h2>
                    </div>
                    <div class="contact-widget">
                        <div class="cw-text">
                            <i class="fa fa-map-marker"></i>
                            <p>{{ $link['address'] ?? '#' }}</p>
                        </div>
                        <div class="cw-text">
                            <i class="fa fa-mobile"></i>
                            <ul>
                                <li>{{ $link['phone'] ?? '#' }}</li>
                                <li>{{ $link['phone2'] ?? '#' }}</li>
                            </ul>
                        </div>
                        <div class="cw-text email">
                            <i class="fa fa-envelope"></i>
                            <p>{{ $link['email'] ?? '#' }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="leave-comment">
                        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                            @csrf
                            <input type="text" placeholder="Nom" name="name">
                            <input type="text" placeholder="Email" name="email">
                            <input type="text" placeholder="Sujet" name="subject">
                            <textarea placeholder="Message" name="message"></textarea>
                            <button type="submit">Envoyer le message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection
