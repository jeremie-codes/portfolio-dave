<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ser-Rapide')</title>
    <link rel="shortcut icon" href="{{ asset('image/icon.png') }}" type="image/x-icon">
    <link href="{{ asset('assets/css/tailwind.min.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body class="flex flex-col min-h-screen bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-gray-200 shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-10">
                <div class="flex items-center">
                    @if($link->phone ?? null)
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        +{{ $link->phone }}
                    @endif
                </div>
                <div class="flex items-center space-x-4">
                    <a href="mailto:{{ $link->email ?? '#' }}" class="text-gray-700 hover:text-blue-500 transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 12.713l11.985-7.99A1.5 1.5 0 0022.5 3h-21a1.5 1.5 0 00-1.485 1.723L12 12.713zM12 14.287L.015 6.297A1.5 1.5 0 000 7.5v9a1.5 1.5 0 001.5 1.5h21a1.5 1.5 0 001.5-1.5v-9a1.5 1.5 0 00-.015-.203L12 14.287z"/>
                        </svg>
                    </a>
                    <a href="{{ $link->facebook ?? '#' }}" class="text-gray-700 hover:text-blue-500 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 2h-3a4 4 0 00-4 4v3H8v4h3v8h4v-8h3l1-4h-4V6a1 1 0 011-1h3z"/>
                        </svg>
                    </a>
                    <a href="{{ $link->instagram ?? '#' }}" class="text-gray-700 hover:text-blue-500 transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.336 3.608 1.31.975.975 1.248 2.242 1.31 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.336 2.633-1.31 3.608-.975.975-2.242 1.248-3.608 1.31-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.336-3.608-1.31-.975-.975-1.248-2.242-1.31-3.608-.058-1.266-.07-1.646-.07-4.85s.012-3.584.07-4.85c.062-1.366.336-2.633 1.31-3.608.975-.975 2.242-1.248 3.608-1.31 1.266-.058 1.646-.07 4.85-.07zm0-2.163C8.756 0 8.332.012 7.052.07 5.773.128 4.548.36 3.467 1.44 2.387 2.52 2.155 3.745 2.097 5.025.012 8.332 0 8.756 0 12s.012 3.668.07 4.948c.058 1.28.29 2.505 1.37 3.585 1.08 1.08 2.305 1.312 3.585 1.37 1.28.058 1.704.07 4.948.07s3.668-.012 4.948-.07c1.28-.058 2.505-.29 3.585-1.37 1.08-1.08 1.312-2.305 1.37-3.585.058-1.28.07-1.704.07-4.948s-.012-3.668-.07-4.948c-.058-1.28-.29-2.505-1.37-3.585-1.08-1.08-2.305-1.312-3.585-1.37-1.28-.058-1.704-.07-4.948-.07zM12 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a3.999 3.999 0 110-7.998 3.999 3.999 0 010 7.998zm6.406-11.845a1.44 1.44 0 11-2.88 0 1.44 1.44 0 012.88 0z"/>
                        </svg>
                    </a>
                    <a href="https://wa.me/{{ $link->phone ?? '#' }}?text=Je veux en savoir plus sur vos services!" class="text-gray-700 hover:text-blue-500 transition">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.553 4.106 1.515 5.84L0 24l6.293-1.515A11.944 11.944 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22.5c-1.85 0-3.59-.504-5.093-1.38l-.364-.217-3.732.897.897-3.732-.217-.364A10.5 10.5 0 1112 22.5zm5.25-7.5c-.3-.15-1.75-.867-2.02-.967-.27-.1-.467-.15-.667.15-.2.3-.767.967-.937 1.167-.17.2-.347.217-.647.067-.3-.15-1.267-.467-2.417-1.483-.893-.8-1.493-1.783-1.667-2.083-.173-.3-.018-.467.13-.617.133-.133.3-.347.45-.52.15-.173.2-.3.3-.5.1-.2.05-.367-.025-.517-.075-.15-.667-1.617-.917-2.217-.242-.583-.487-.5-.667-.5-.173 0-.367-.017-.567-.017-.2 0-.517.075-.783.367-.267.3-1.05 1.033-1.05 2.517 0 1.483 1.067 2.917 1.217 3.117.15.2 2.1 3.217 5.1 4.517.717.3 1.283.467 1.717.6.72.23 1.377.197 1.897.12.577-.086 1.75-.717 2-1.417.25-.7.25-1.3.173-1.417-.075-.117-.267-.183-.567-.317z"/>
                        </svg>
                    </a>

                </div>
            </div>
        </div>
    </nav>
    <nav class="bg-white border-t shadow-lg sticky top-10 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <span class="text-2xl font-bold text-blue-500">
                           <img src="{{ asset('image/icon.png') }}" alt="logo" style="width: 120px">
                        </span>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 {{ Request::is('/') ? 'text-blue-500' : '' }} hover:text-blue-500 transition">Accueil</a>
                    <a href="{{ route('about') }}" class="text-gray-700 {{ Request::is('about') ? 'text-blue-500' : '' }} hover:text-blue-500 transition">À propos</a>
                    <a href="{{ route('contact') }}" class="text-gray-700 {{ Request::is('contact') ? 'text-blue-500' : '' }} hover:text-blue-500 transition">Contact</a>
                    <a href="{{ route('contact') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                        Demander un devis
                    </a>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="mobile-menu-button">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu -->
        <div class="mobile-menu hidden md:hidden">
            <a href="{{ route('home') }}" class="block py-2 px-4 text-sm {{ Request::is('/') ? 'text-blue-500' : '' }} hover:bg-gray-50">Accueil</a>
            <a href="{{ route('about') }}" class="block py-2 px-4 text-sm {{ Request::is('/about') ? 'text-blue-500' : '' }} hover:bg-gray-50">À propos</a>
            <a href="{{ route('contact') }}" class="block py-2 px-4 text-sm {{ Request::is('/contact') ? 'text-blue-500' : '' }} hover:bg-gray-50">Contact</a>
            <a href="{{ route('contact') }}" class="block py-2 px-4 text-sm bg-blue-500 text-white">Demander un devis</a>
        </div>
    </nav>

    <!-- Contenu principal -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <img src="{{ asset('image/icon-w.png') }}" alt="Logo" width="200">
                    <p class="text-gray-300 mb-4">Votre partenaire de confiance pour tous vos besoins en transport et logistique. Nous offrons des solutions sur mesure pour optimiser votre chaîne d'approvisionnement.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white">
                            <span class="sr-only">LinkedIn</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Liens rapides</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition">Accueil</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-white transition">À propos</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-white transition">Contact</a></li>
                        <li><a href="{{ route('home') }}#Services" class="text-gray-300 hover:text-white transition">Nos services</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Contact</h3>
                    <ul class="space-y-2 text-gray-300">
                        @if ($link->adresse_2 ?? null)
                            <li class="flex items-center">
                                <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                {{ $link->adresse_2 ?? null }}
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                +{{ $link->phone_2 ?? null }}
                            </li>
                        @endif
                        @if ($link->adresse ?? null)
                            <li class="flex items-center">
                                <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                {{ $link->adresse ?? null }}
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                +{{ $link->phone ?? null }}
                            </li>
                        @endif
                        @if ($link->email ?? null)
                            <li class="flex items-center">
                                <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                {{ $link->email ?? null }}
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-700">
                <p class="text-center text-gray-300">&copy; {{ date('Y') }} Ser-Rapide. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    @stack('scripts')
    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu-button').addEventListener('click', function() {
            document.querySelector('.mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>
