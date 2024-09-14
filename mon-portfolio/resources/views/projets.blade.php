@extends('layouts.app')

@section('content')
<div class="container mx-auto px-8" id="projets">
    <h2 class="text-white text-2xl font-bold mb-12 text-center">Mes Projets</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($projets as $index => $projet)
        <div class="border border-gray-800 p-6 rounded-lg shadow-lg transform hover:-translate-y-2 hover:shadow-2xl transition duration-300" style="background-color: rgba(255, 255, 255, 0.055);">
            @php
                // Check if there is a corresponding image for the current project
                $photo = isset($photos[$index]) ? $photos[$index] : 'default-image.png'; // Provide a default image if out of bounds
            @endphp
            <!-- Display corresponding photo with hover effect -->
            <div class="overflow-hidden rounded-lg mb-4">
                <img src="{{ asset('images/' . $photo) }}" alt="{{ $projet->nom }}" class="h-48 w-full object-cover transition-transform duration-300 transform hover:scale-105">
            </div>
            <h3 class="text-2xl font-semibold text-gray-100 mb-2">{{ $projet->nom }}</h3>
            <p class="text-gray-400 leading-relaxed">{{ $projet->description }}</p>
            <a href="{{ $projet->lien }}" class="text-blue-400 hover:text-blue-300 mt-4 inline-block font-semibold transition-colors duration-300">Voir le projet</a>
        </div>
        @endforeach
    </div>
</div>
@endsection
