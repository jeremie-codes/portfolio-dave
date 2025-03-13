@extends('layouts.app')

@section('title', $service->titre . ' - Ser-Rapide')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <h1 class="text-3xl font-bold mb-4">{{ $service->titre }}</h1>
        @if($service->image)
            <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->titre }}" class="w-full h-72 object-cover mb-4">
        @endif
        <div class="prose prose-lg">
            {!! $service->description !!}
        </div>
        <div class="mt-6 flex gap-x-2">
            <a href="{{ route('contact') }}" class="bg-blue-500 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-600 transition">
                Contactez-nous pour plus d'informations
            </a>
            @if ($link->whatsapp)
                <a href="https://wa.me/{{ $link->phone }}?text=Je veux en savoir plus sur vos services!" class="text-green-500 text-white px-1 py-3 rounded-lg font-semibold hover:text-green-600 transition flex items-center justify-center">
                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.553 4.106 1.515 5.84L0 24l6.293-1.515A11.944 11.944 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22.5c-1.85 0-3.59-.504-5.093-1.38l-.364-.217-3.732.897.897-3.732-.217-.364A10.5 10.5 0 1112 22.5zm5.25-7.5c-.3-.15-1.75-.867-2.02-.967-.27-.1-.467-.15-.667.15-.2.3-.767.967-.937 1.167-.17.2-.347.217-.647.067-.3-.15-1.267-.467-2.417-1.483-.893-.8-1.493-1.783-1.667-2.083-.173-.3-.018-.467.13-.617.133-.133.3-.347.45-.52.15-.173.2-.3.3-.5.1-.2.05-.367-.025-.517-.075-.15-.667-1.617-.917-2.217-.242-.583-.487-.5-.667-.5-.173 0-.367-.017-.567-.017-.2 0-.517.075-.783.367-.267.3-1.05 1.033-1.05 2.517 0 1.483 1.067 2.917 1.217 3.117.15.2 2.1 3.217 5.1 4.517.717.3 1.283.467 1.717.6.72.23 1.377.197 1.897.12.577-.086 1.75-.717 2-1.417.25-.7.25-1.3.173-1.417-.075-.117-.267-.183-.567-.317z"/>
                    </svg>
                </a>
            @endif
            @if ($link->instagram)
                <a href="{{ $link->instagram }}" class="text-pink-500 text-white px-1 py-3 rounded-lg font-semibold hover:text-pink-600 transition flex items-center justify-center">
                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.336 3.608 1.31.975.975 1.248 2.242 1.31 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.336 2.633-1.31 3.608-.975.975-2.242 1.248-3.608 1.31-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.336-3.608-1.31-.975-.975-1.248-2.242-1.31-3.608-.058-1.266-.07-1.646-.07-4.85s.012-3.584.07-4.85c.062-1.366.336-2.633 1.31-3.608.975-.975 2.242-1.248 3.608-1.31 1.266-.058 1.646-.07 4.85-.07zm0-2.163C8.756 0 8.332.012 7.052.07 5.773.128 4.548.36 3.467 1.44 2.387 2.52 2.155 3.745 2.097 5.025.012 8.332 0 8.756 0 12s.012 3.668.07 4.948c.058 1.28.29 2.505 1.37 3.585 1.08 1.08 2.305 1.312 3.585 1.37 1.28.058 1.704.07 4.948.07s3.668-.012 4.948-.07c1.28-.058 2.505-.29 3.585-1.37 1.08-1.08 1.312-2.305 1.37-3.585.058-1.28.07-1.704.07-4.948s-.012-3.668-.07-4.948c-.058-1.28-.29-2.505-1.37-3.585-1.08-1.08-2.305-1.312-3.585-1.37-1.28-.058-1.704-.07-4.948-.07zM12 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a3.999 3.999 0 110-7.998 3.999 3.999 0 010 7.998zm6.406-11.845a1.44 1.44 0 11-2.88 0 1.44 1.44 0 012.88 0z"/>
                    </svg>
                </a>
            @endif
            @if ($link->facebook)
                <a href="{{ $link->facebook }}" class="text-blue-700 text-white px-1 py-3 rounded-lg font-semibold hover:text-blue-800 transition flex items-center justify-center">
                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.675 0h-21.35C.597 0 0 .597 0 1.325v21.351C0 23.403.597 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.794.715-1.794 1.763v2.31h3.587l-.467 3.622h-3.12V24h6.116c.729 0 1.325-.597 1.325-1.324V1.325C24 .597 23.403 0 22.675 0z"/>
                    </svg>
                </a>
            @endif
            @if ($link->email)
                <a href="mailto:{{ $link->email }}" class="text-gray-500 text-white px-1 py-3 rounded-lg font-semibold hover:text-gray-600 transition flex items-center justify-center">
                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 12.713l11.985-7.99A1.5 1.5 0 0022.5 3h-21a1.5 1.5 0 00-1.485 1.723L12 12.713zM12 14.287L.015 6.297A1.5 1.5 0 000 7.5v9a1.5 1.5 0 001.5 1.5h21a1.5 1.5 0 001.5-1.5v-9a1.5 1.5 0 00-.015-.203L12 14.287z"/>
                    </svg>
                </a>
            @endif
        </div>
    </div>
@endsection
