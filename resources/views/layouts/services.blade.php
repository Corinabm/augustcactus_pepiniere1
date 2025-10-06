@extends('layouts.app')

@section('title', 'Services - August Cactus')

@section('content')
<!-- Espacement pour la navbar fixe -->
<div class="pt-24"></div>

<!-- Section Hero -->
<section class="relative bg-white py-12 sm:py-16 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-3 sm:mb-4 text-olive">Nos Services</h1>
        <p class="text-base sm:text-lg md:text-xl text-gray-600">Découvrez nos services pour embellir vos espaces</p>
    </div>
</section>

<!-- Section Services -->
<section class="py-12 sm:py-16 md:py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            <!-- Service 1 : Aménagement -->
            <div class="bg-white shadow-lg overflow-hidden flex flex-col">
                <img src="https://picsum.photos/600/400?random=50" alt="Aménagement paysager" class="w-full h-64 object-cover">
                <div class="p-6 text-center flex flex-col flex-grow">
                    <h3 class="text-2xl font-bold text-olive mb-4">Aménagement Paysager</h3>
                    <p class="text-gray-600 mb-4 flex-grow">
                        Transformez vos espaces extérieurs en véritables havres de paix. Notre équipe d'experts conçoit et réalise des aménagements paysagers sur mesure, adaptés à vos envies et à votre budget.
                    </p>
                    <a href="{{ route('amenagement') }}" class="inline-block bg-yellow text-olive px-5 py-2 font-semibold hover:bg-yellow/90 transition-colors duration-300 rounded-lg text-sm mx-auto">
                        En savoir plus
                    </a>
                </div>
            </div>

            <!-- Service 2 : Location -->
            <div class="bg-white shadow-lg overflow-hidden flex flex-col">
                <img src="https://picsum.photos/600/400?random=51" alt="Location de plantes" class="w-full h-64 object-cover">
                <div class="p-6 text-center flex flex-col flex-grow">
                    <h3 class="text-2xl font-bold text-olive mb-4">Location de Plantes</h3>
                    <p class="text-gray-600 mb-4 flex-grow">
                        Besoin de végétaux pour un événement ou pour dynamiser temporairement vos espaces ? Nous proposons un service de location de plantes flexible et pratique pour tous vos besoins ponctuels.
                    </p>
                    <a href="{{ route('location') }}" class="inline-block bg-yellow text-olive px-5 py-2 font-semibold hover:bg-yellow/90 transition-colors duration-300 rounded-lg text-sm mx-auto">
                        En savoir plus
                    </a>
                </div>
            </div>

            <!-- Service 3 : Décoration -->
            <div class="bg-white shadow-lg overflow-hidden flex flex-col">
                <img src="https://picsum.photos/600/400?random=52" alt="Décoration végétale" class="w-full h-64 object-cover">
                <div class="p-6 text-center flex flex-col flex-grow">
                    <h3 class="text-2xl font-bold text-olive mb-4">Décoration Végétale</h3>
                    <p class="text-gray-600 mb-4 flex-grow">
                        Sublimez vos intérieurs et extérieurs avec nos créations végétales originales. De la composition florale aux murs végétaux, nous créons des décors uniques qui reflètent votre personnalité.
                    </p>
                    <a href="{{ route('contact') }}" class="inline-block bg-yellow text-olive px-5 py-2 font-semibold hover:bg-yellow/90 transition-colors duration-300 rounded-lg text-sm mx-auto">
                        En savoir plus
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection