@extends('layouts.app')

@section('title', 'Services - August Cactus')

@section('content')
<!-- Espacement pour la navbar fixe -->
<div class="pt-16 sm:pt-20"></div>

<main class="bg-gradient-to-b from-white to-gray-50 min-h-screen">
    <!-- Section Hero moderne -->
    <section class="relative bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-14 md:py-16">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-olive mb-4 sm:mb-5 md:mb-6 leading-tight">
                    Nos Services
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-600 font-light leading-relaxed">
                    Des solutions sur mesure pour embellir et entretenir vos espaces verts
                </p>
            </div>
        </div>
    </section>

    <!-- Section Services moderne -->
    <section class="py-6 sm:py-8 md:py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 lg:gap-10">

                <!-- Service 1 : Aménagement -->
                <div class="service-card group bg-white rounded-2xl overflow-hidden border border-gray-200 hover:shadow-2xl transition-all duration-500 flex flex-col">
                    <!-- Image -->
                    <div class="relative aspect-[4/3] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/services/amenagement.jpg') }}"
                             alt="Aménagement paysager"
                             class="w-full h-full object-cover">
                    </div>

                    <!-- Contenu -->
                    <div class="p-6 sm:p-8 flex flex-col flex-grow">
                        <h3 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-900 mb-3 sm:mb-4">
                            Aménagement
                        </h3>
                        <p class="text-sm sm:text-base text-gray-600 leading-relaxed mb-4 sm:mb-6">
                            Transformez vos espaces extérieurs en véritables havres de paix grâce à nos aménagements sur mesure, adaptés à vos envies et votre budget.
                        </p>

                        <!-- Liste des avantages -->
                        <ul class="space-y-2 sm:space-y-3 mb-6 sm:mb-8">
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-olive flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700 text-sm">Conception personnalisée</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-olive flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700 text-sm">Plantes adaptées au climat</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-olive flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700 text-sm">Installation professionnelle</span>
                            </li>
                        </ul>

                        <!-- Bouton -->
                        <a href="{{ route('amenagement') }}"
                           class="group/btn inline-flex items-center justify-center gap-2 w-full px-4 sm:px-6 py-3 sm:py-4 bg-olive text-white text-sm sm:text-base font-semibold rounded-full hover:bg-green-800 transition-all duration-300 mt-auto">
                            <span>En savoir plus</span>
                            <svg class="w-5 h-5 transform group-hover/btn:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service 2 : Location -->
                <div class="service-card group bg-white rounded-2xl overflow-hidden border border-gray-200 hover:shadow-2xl transition-all duration-500 flex flex-col">
                    <!-- Image -->
                    <div class="relative aspect-[4/3] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/services/location.jpg') }}"
                             alt="Location de plantes"
                             class="w-full h-full object-cover">
                    </div>

                    <!-- Contenu -->
                    <div class="p-6 sm:p-8 flex flex-col flex-grow">
                        <h3 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-900 mb-3 sm:mb-4">
                            Location de Plantes
                        </h3>
                        <p class="text-sm sm:text-base text-gray-600 leading-relaxed mb-4 sm:mb-6">
                            Nous proposons un service de location de plantes flexible et pratique pour tous vos besoins ponctuels.
                        </p>

                        <!-- Liste des avantages -->
                        <ul class="space-y-2 sm:space-y-3 mb-6 sm:mb-8">
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-olive flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700 text-sm">Formules flexibles</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-olive flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700 text-sm">Entretien inclus</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-olive flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700 text-sm">Livraison et installation</span>
                            </li>
                        </ul>

                        <!-- Bouton -->
                        <a href="{{ route('location') }}"
                           class="group/btn inline-flex items-center justify-center gap-2 w-full px-4 sm:px-6 py-3 sm:py-4 bg-olive text-white text-sm sm:text-base font-semibold rounded-full hover:bg-green-800 transition-all duration-300 mt-auto">
                            <span>En savoir plus</span>
                            <svg class="w-5 h-5 transform group-hover/btn:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service 3 : Entretien -->
                <div class="service-card group bg-white rounded-2xl overflow-hidden border border-gray-200 hover:shadow-2xl transition-all duration-500 flex flex-col">
                    <!-- Image -->
                    <div class="relative aspect-[4/3] overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/services/entretien.jpg') }}"
                             alt="Décoration végétale"
                             class="w-full h-full object-cover">
                    </div>

                    <!-- Contenu -->
                    <div class="p-6 sm:p-8 flex flex-col flex-grow">
                        <h3 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-900 mb-3 sm:mb-4">
                            Entretien jardin ou plantes
                        </h3>
                        <p class="text-sm sm:text-base text-gray-600 leading-relaxed mb-4 sm:mb-6">
                            Confiez-nous l'entretien de votre jardin et vos plantes.
                        </p>

                        <!-- Liste des avantages -->
                        <ul class="space-y-2 sm:space-y-3 mb-6 sm:mb-8">
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-olive flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700 text-sm">Taille et élagage</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-olive flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700 text-sm">Arrosage et fertilisation</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-olive flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700 text-sm">Traitement des maladies</span>
                            </li>
                        </ul>

                        <!-- Bouton -->
                        <a href="{{ route('entretien') }}"
                           class="group/btn inline-flex items-center justify-center gap-2 w-full px-4 sm:px-6 py-3 sm:py-4 bg-olive text-white text-sm sm:text-base font-semibold rounded-full hover:bg-green-800 transition-all duration-300 mt-auto">
                            <span>En savoir plus</span>
                            <svg class="w-5 h-5 transform group-hover/btn:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
@endsection

@section('styles')
<style>
    /* Smooth scroll */
    html {
        scroll-behavior: smooth;
    }

    /* Animation au scroll pour les cards */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .service-card {
        animation: fadeInUp 0.6s ease-out forwards;
        opacity: 0;
    }

    .service-card:nth-child(1) { animation-delay: 0.1s; }
    .service-card:nth-child(2) { animation-delay: 0.2s; }
    .service-card:nth-child(3) { animation-delay: 0.3s; }

    /* Désactiver les animations sur les préférences utilisateur */
    @media (prefers-reduced-motion: reduce) {
        *,
        *::before,
        *::after {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.01ms !important;
        }
    }
</style>
@endsection