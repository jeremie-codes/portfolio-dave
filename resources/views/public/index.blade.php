@extends('layouts.app')

@section('title', 'Accueil - Ser-Rapide')

@section('content')
    <!-- Hero Carousel Section -->
    <div class="relative">
        <div class="swiper-container hero-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide relative bg-blue-600">
                    <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80"
                         alt="Transport maritime"
                         class="absolute inset-0 w-full h-full object-cover opacity-30">
                    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
                        <div class="text-center text-white">
                            <h1 class="text-4xl md:text-6xl font-bold mb-6">Solutions de Transport International</h1>
                            <p class="text-xl mb-8">Votre partenaire de confiance pour tous vos besoins en logistique</p>
                            <a href="{{ route('contact') }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                                Contactez-nous
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide relative bg-blue-700">
                    <img src="https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80"
                         alt="Transport aérien"
                         class="absolute inset-0 w-full h-full object-cover opacity-30">
                    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
                        <div class="text-center text-white">
                            <h1 class="text-4xl md:text-6xl font-bold mb-6">Excellence en Logistique</h1>
                            <p class="text-xl mb-8">Des solutions sur mesure pour vos expéditions internationales</p>
                            <a href="{{ route('about') }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                                En savoir plus
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <!-- Statistiques Section -->
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-4xl font-bold text-blue-600 mb-2">15+</div>
                    <div class="text-gray-600">Années d'expérience</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-blue-600 mb-2">50+</div>
                    <div class="text-gray-600">Pays desservis</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-blue-600 mb-2">1500+</div>
                    <div class="text-gray-600">Clients satisfaits</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-blue-600 mb-2">24/7</div>
                    <div class="text-gray-600">Support client</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <h2 class="text-3xl font-bold text-center mb-4">Nos Services</h2>
        <p class="text-gray-600 text-center mb-12 max-w-2xl mx-auto">
            Découvrez notre gamme complète de services logistiques adaptés à vos besoins spécifiques
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($services as $service)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    @if($service->image)
                        <img src="{{ asset('storage/' . $service->image) }}"
                             alt="{{ $service->titre }}"
                             class="w-full h-48 object-cover">
                    @endif
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">{{ $service->titre }}</h3>
                        <div class="prose prose-sm text-gray-600 mb-4">
                            {!! $service->description !!}
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-blue-600">{{ $service->category->name }}</span>
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">
                                En savoir plus →
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Pourquoi nous choisir -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12">Pourquoi Choisir FreightPro ?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="text-blue-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Rapidité d'exécution</h3>
                    <p class="text-gray-600">Des délais optimisés et un suivi en temps réel de vos expéditions.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="text-blue-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Sécurité garantie</h3>
                    <p class="text-gray-600">Vos marchandises sont assurées et sécurisées tout au long du transport.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="text-blue-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Équipe experte</h3>
                    <p class="text-gray-600">Des professionnels qualifiés à votre service 24h/24 et 7j/7.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-blue-600 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Prêt à optimiser votre logistique ?</h2>
            <p class="text-xl text-white mb-8">Contactez-nous dès aujourd'hui pour une consultation gratuite</p>
            <a href="{{ route('contact') }}"
               class="inline-block bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                Demander un devis
            </a>
        </div>
    </div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endpush

@push('scripts')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Swiper('.hero-swiper', {
            loop: true,
            autoplay: {
                delay: 5000,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    });
</script>
@endpush
