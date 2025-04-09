@extends('layouts.app')

@section('title', 'Accueil - Ser-Rapide')

@section('content')
    <!-- Hero Carousel Section -->
    <div class="relative">
        <div class="swiper-container hero-swiper">
            <div class="swiper-wrapper" style="height: 520px;">
                <div class="swiper-slide relative bg-black">
                    <img src="{{ asset('image/maritime.avif') }}"
                         alt="Transport maritime"
                         class="absolute inset-0 w-full h-full object-cover opacity-30">
                    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
                        <div class="text-center text-white">
                            <h1 class="text-4xl md:text-6xl font-bold mb-6 text-blue-400">Ser-Rapide</h1>
                            <p class="text-xl m-0">Solutions de Transport International</p>
                            <p class="text-xl mb-8">Votre partenaire de confiance pour tous vos besoins en logistique</p>
                            <a href="{{ route('contact') }}" class="bg-white text-blue-500 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                                Contactez-nous
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide relative bg-black">
                    <img src="{{ asset('image/aerien.avif') }}"
                         alt="Transport aérien"
                         class="absolute inset-0 w-full h-full object-cover opacity-30">
                    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
                        <div class="text-center text-white">
                            <h1 class="text-4xl md:text-6xl font-bold mb-6 text-blue-400">Excellence en Logistique</h1>
                            <p class="text-xl mb-8">Des solutions sur mesure pour vos expéditions internationales</p>
                            <a href="{{ route('about') }}" class="bg-white text-blue-500 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
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

    <div class="px-4 mt-0 pt-0 py-0 ">
        <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
          <div class="mt-1 grid divide-x divide-y  divide-gray-700 overflow-hidden  rounded-3xl border text-gray-600 border-gray-700 sm:grid-cols-2 lg:grid-cols-4  lg:divide-y-0 xl:grid-cols-4">
            <div class="group relative bg-gray-800 transition hover:z-[1] hover:shadow-2xl  hover:shadow-gray-600/10">
              <div class="relative space-y-8 py-12 p-8">
                <img src="https://www.svgrepo.com/show/164986/logo.svg" loading="lazy" width="200" height="200"class="w-12 h-12 rounded-full" style="color:transparent">
                <div class="space-y-2">
                  <h5 class="text-xl font-semibold text-white transition group-hover:text-secondary">5+</h5>
                  <p class="text-gray-300">Années d'expérience.</p>
                </div>
              </div>
            </div>
            <div class="group relative bg-gray-800 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
              <div class="relative space-y-8 py-12 p-8">
                <img src="https://www.svgrepo.com/show/120853/logo.svg" loading="lazy" width="200" height="200"class="w-12 h-12 rounded-full" style="color:transparent" >
                <div class="space-y-2">
                  <h5 class="text-xl font-semibold text-white transition group-hover:text-secondary">50+</h5>
                  <p class="text-gray-300">Pays desservis.</p>
                </div>
              </div>
            </div>
            <div class="group relative bg-gray-800 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
              <div class="relative space-y-8 py-12 p-8">
                <img src="https://www.svgrepo.com/show/120852/logo.svg" loading="lazy" width="200" height="200"class="w-12 h-12 rounded-full" style="color:transparent" >
                <div class="space-y-2">
                  <h5 class="text-xl font-semibold text-white transition group-hover:text-secondary">1500+</h5>
                  <p class="text-gray-300">Clients satisfaits.</p>
                </div>
              </div>
            </div>
            <div class="group relative bg-gray-800 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
              <div class="relative space-y-8 py-12 p-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill='#80a4ff' width="44" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path  d="M64 64a64 64 0 1 1 128 0A64 64 0 1 1 64 64zM25.9 233.4C29.3 191.9 64 160 105.6 160l44.8 0c27 0 51 13.4 65.5 34.1c-2.7 1.9-5.2 4-7.5 6.3l-64 64c-21.9 21.9-21.9 57.3 0 79.2L192 391.2l0 72.8c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48l0-115.7c-26.5-9.5-44.7-35.8-42.2-65.6l4.1-49.3zM448 64a64 64 0 1 1 128 0A64 64 0 1 1 448 64zM431.6 200.4c-2.3-2.3-4.9-4.4-7.5-6.3c14.5-20.7 38.6-34.1 65.5-34.1l44.8 0c41.6 0 76.3 31.9 79.7 73.4l4.1 49.3c2.5 29.8-15.7 56.1-42.2 65.6L576 464c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48l0-72.8 47.6-47.6c21.9-21.9 21.9-57.3 0-79.2l-64-64zM272 240l0 32 96 0 0-32c0-9.7 5.8-18.5 14.8-22.2s19.3-1.7 26.2 5.2l64 64c9.4 9.4 9.4 24.6 0 33.9l-64 64c-6.9 6.9-17.2 8.9-26.2 5.2s-14.8-12.5-14.8-22.2l0-32-96 0 0 32c0 9.7-5.8 18.5-14.8 22.2s-19.3 1.7-26.2-5.2l-64-64c-9.4-9.4-9.4-24.6 0-33.9l64-64c6.9-6.9 17.2-8.9 26.2-5.2s14.8 12.5 14.8 22.2z"/></svg>                <div class="space-y-2">
                  <h5 class="text-xl font-semibold text-white transition group-hover:text-secondary">24/7</h5>
                  <p class="text-gray-300">Support client</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    <!-- Services Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16" id="Services">
        <h2 class="text-3xl font-bold text-center mb-4">Nos Services</h2>
        <p class="text-gray-600 text-center mb-12 max-w-2xl mx-auto">
            Découvrez notre gamme complète de services logistiques adaptés à vos besoins spécifiques
        </p>

        <div class="border-b border-gray-200 dark:border-neutral-700">
            <nav class="-mb-0.5 flex justify-end space-x-6" aria-label="Tabs" role="tablist" aria-orientation="horizontal">

                <form method="GET" action="#Services">
                    <input type="hidden" name="category" value="*">
                    <button type="submit" class="{{ request('category') == "" || request('category') === null || request('category') === '*' ? 'font-semibold border-blue-600 text-blue-600' : '' }} py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-hidden focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500 active" id="horizontal-right-alignment-item-3" aria-selected="false" data-hs-tab="#horizontal-right-alignment-3" aria-controls="horizontal-right-alignment-3" role="tab">
                        Tous
                    </button>
                </form>

                @foreach ($categories as $category)
                    <form method="GET" action="#Services">
                        <input type="hidden" name="category" value="{{ $category->id }}">
                        <button type="submit" class="{{ request('category') == $category->id ? 'font-semibold border-blue-600 text-blue-600' : '' }}  py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-hidden focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500" id="horizontal-right-alignment-item-3" aria-selected="false" data-hs-tab="#horizontal-right-alignment-3" aria-controls="horizontal-right-alignment-3" role="tab">
                            {{ $category->name }}
                        </button>
                    </form>
                @endforeach
            </nav>
          </div>

          <div class="mt-10">
            <div id="horizontal-right-alignment-1" role="tabpanel" aria-labelledby="horizontal-right-alignment-item-1">
              <p class="text-gray-500 dark:text-neutral-400">
                        <!-- Liste des services -->
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
                                    <span class="text-sm text-blue-500">{{ $service->category->name }}</span>
                                    <a href="{{ route('services.show', $service->id) }}" class="text-blue-500 hover:text-blue-800 font-medium">
                                        En savoir plus →
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
              </p>
            </div>
            <div id="horizontal-right-alignment-2" class="hidden" role="tabpanel" aria-labelledby="horizontal-right-alignment-item-2">
              <p class="text-gray-500 dark:text-neutral-400">
                This is the <em class="font-semibold text-gray-800 dark:text-neutral-200">second</em> item's tab body.
              </p>
            </div>
            <div id="horizontal-right-alignment-3" class="hidden" role="tabpanel" aria-labelledby="horizontal-right-alignment-item-3">
              <p class="text-gray-500 dark:text-neutral-400">
                This is the <em class="font-semibold text-gray-800 dark:text-neutral-200">third</em> item's tab body.
              </p>
            </div>
          </div>
    </div>

    <!-- Pourquoi nous choisir -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12">Pourquoi Choisir <span class="text-blue-500">Ser-Rapide</span> ?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="text-blue-500 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Rapidité d'exécution</h3>
                    <p class="text-gray-600">Des délais optimisés et un suivi en temps réel de vos expéditions.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="text-blue-500 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Sécurité garantie</h3>
                    <p class="text-gray-600">Vos marchandises sont assurées et sécurisées tout au long du transport.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="text-blue-500 mb-4">
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
    <div class="bg-blue-500 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Prêt à optimiser votre logistique ?</h2>
            <p class="text-xl text-white mb-8">Contactez-nous dès aujourd'hui pour une consultation gratuite</p>
            <a href="{{ route('contact') }}"
               class="inline-block bg-white text-blue-500 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                Demander un devis
            </a>
        </div>
    </div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />
@endpush

@push('scripts')
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
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
