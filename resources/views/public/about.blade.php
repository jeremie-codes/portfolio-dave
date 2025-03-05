@extends('layouts.app')

@section('title', 'À propos - Ser-Rapide')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-4xl font-bold mb-6">À propos de FreightPro</h1>
                <p class="text-gray-600 mb-6">
                    Depuis plus de 15 ans, FreightPro s'est imposé comme un leader dans le secteur du transport et de la logistique internationale. Notre engagement envers l'excellence et l'innovation nous permet de fournir des solutions sur mesure à nos clients.
                </p>
                <p class="text-gray-600 mb-6">
                    Notre équipe d'experts dévoués travaille sans relâche pour garantir que vos marchandises arrivent à destination en toute sécurité et dans les délais impartis.
                </p>
                <div class="grid grid-cols-2 gap-6 mt-8">
                    <div class="text-center">
                        <span class="text-4xl font-bold text-blue-600">1500+</span>
                        <p class="text-gray-600">Clients satisfaits</p>
                    </div>
                    <div class="text-center">
                        <span class="text-4xl font-bold text-blue-600">50+</span>
                        <p class="text-gray-600">Pays desservis</p>
                    </div>
                </div>
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                     alt="Notre équipe"
                     class="rounded-lg shadow-lg">
            </div>
        </div>
    </div>
@endsection
