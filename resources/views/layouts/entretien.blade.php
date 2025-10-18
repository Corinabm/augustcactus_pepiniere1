@extends('layouts.app')

@section('title', 'Entretien de Jardin et Plantes - August Cactus')

@section('content')
<!-- Espacement pour la navbar fixe -->
<div class="pt-16 sm:pt-20"></div>

<!-- Breadcrumb -->
<nav class="bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <ol class="flex items-center space-x-2 text-sm">
            <li>
                <a href="{{ route('index') }}" class="text-gray-500 hover:text-olive transition-colors duration-200">
                    Accueil
                </a>
            </li>
            <li class="flex items-center">
                <svg class="w-4 h-4 text-gray-400 mx-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                </svg>
                <a href="{{ route('services') }}" class="text-gray-500 hover:text-olive transition-colors duration-200">
                    Services
                </a>
            </li>
            <li class="flex items-center">
                <svg class="w-4 h-4 text-gray-400 mx-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-900 font-medium">
                    Entretien
                </span>
            </li>
        </ol>
    </div>
</nav>

<main class="bg-white">
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-24 md:py-28 lg:py-32">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <!-- Texte à gauche -->
                <div>
                    <div class="mb-6 sm:mb-8">
                        <span class="inline-block px-5 py-2 bg-olive/10 text-olive text-xs sm:text-sm font-semibold rounded-full tracking-wide">
                            ENTRETIEN
                        </span>
                    </div>
                    <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-gray-900 mb-8 sm:mb-10 leading-[0.95] tracking-tight">
                        Un jardin<br>
                        toujours<br>
                        <span class="text-olive">impeccable</span>
                    </h1>
                    <p class="text-lg sm:text-xl md:text-2xl text-gray-600 font-light leading-relaxed">
                        Confiez nous l'entretien de votre jardin et vos plantes 
                    </p>
                </div>

                <!-- Image à droite -->
                <div class="relative lg:order-last w-full">
                    <div class="relative w-full" style="padding-bottom: 75%;">
                        <img src="{{ asset('images/services/entretien.jpg') }}"
                             alt="Entretien de jardin"
                             class="absolute inset-0 w-full h-full object-cover rounded-2xl shadow-xl">
                    </div>
                    <!-- Élément décoratif derrière l'image -->
                    <div class="absolute -bottom-6 -right-6 w-full h-full bg-olive/5 rounded-2xl -z-10"></div>
                </div>
            </div>
        </div>

        <!-- Éléments décoratifs subtils -->
        <div class="absolute top-20 right-10 w-72 h-72 bg-olive/5 rounded-full blur-3xl -z-10"></div>
        <div class="absolute bottom-20 left-10 w-96 h-96 bg-yellow/10 rounded-full blur-3xl -z-10"></div>
    </section>

    <!-- Section Introduction -->
    <section class="py-12 sm:py-16 md:py-20 bg-gray-50/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                <!-- Texte -->
                <div>
                    <div class="mb-6">
                        <span class="text-sm font-semibold text-olive/80 tracking-widest uppercase">Notre Expertise</span>
                    </div>
                    <h2 class="text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900 mb-10 leading-tight">
                        Notre expertise<br>à votre service
                    </h2>
                    <div class="space-y-6 text-lg sm:text-xl text-gray-700 leading-relaxed">
                        <p>
                            <strong class="text-olive">August Cactus</strong> assure l'entretien de vos jardins.
                        </p>
                        <p>
                            Nous conseillons à nos clients un entretien régulier de leurs plantes pour garantir la réussite et la durabilité de leur jardin.
                        </p>
                        <p>
                             La fréquence et la durée de cet entretien s'adaptent à vos besoins spécifiques.
                        </p>
                    </div>
                </div>

                <!-- Images en mosaïque -->
                <div class="grid grid-cols-2 gap-6">
                    <div class="space-y-6">
                        <div class="aspect-square rounded-2xl overflow-hidden shadow-lg">
                            <img src="https://picsum.photos/400/400?random=80"
                                 alt="Taille et élagage"
                                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                        </div>
                        <div class="aspect-[4/5] rounded-2xl overflow-hidden shadow-lg">
                            <img src="https://picsum.photos/400/500?random=81"
                                 alt="Arrosage"
                                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                        </div>
                    </div>
                    <div class="mt-12">
                        <div class="aspect-[4/5] rounded-2xl overflow-hidden shadow-lg">
                            <img src="https://picsum.photos/400/500?random=82"
                                 alt="Traitement des plantes"
                                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Avantages -->
    <section class="py-12 sm:py-16 md:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 sm:mb-16">
                <div class="mb-6">
                    <span class="text-sm font-semibold text-olive/80 tracking-widest uppercase">Avantages</span>
                </div>
                <h2 class="text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900 mb-6">
                    Pourquoi nous confier<br>votre jardin ?
                </h2>
                <p class="text-xl sm:text-2xl text-gray-600 max-w-2xl mx-auto font-light">
                    Un service complet et professionnel
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 sm:gap-10">
                <!-- Avantage 1 -->
                <div class="group text-center">
                    <div class="bg-white rounded-3xl p-8 sm:p-10 h-full border border-gray-200 hover:border-olive/50 transition-all duration-300 hover:shadow-xl">
                        <div class="mb-8">
                            <div class="inline-flex items-center justify-center w-20 h-20 bg-olive/10 rounded-2xl group-hover:bg-olive group-hover:scale-110 transition-all duration-300">
                                <svg class="w-10 h-10 text-olive group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">
                            Expertise
                        </h3>
                        <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                            Une grande connaissance de plantes 
                        </p>
                    </div>
                </div>

                <!-- Avantage 2 -->
                <div class="group text-center">
                    <div class="bg-white rounded-3xl p-8 sm:p-10 h-full border border-gray-200 hover:border-olive/50 transition-all duration-300 hover:shadow-xl">
                        <div class="mb-8">
                            <div class="inline-flex items-center justify-center w-20 h-20 bg-olive/10 rounded-2xl group-hover:bg-olive group-hover:scale-110 transition-all duration-300">
                                <svg class="w-10 h-10 text-olive group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">
                            Gain de temps
                        </h3>
                        <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                            Profitez de votre jardin sans consacrer de temps à l'entretien
                        </p>
                    </div>
                </div>

                <!-- Avantage 3 -->
                <div class="group text-center">
                    <div class="bg-white rounded-3xl p-8 sm:p-10 h-full border border-gray-200 hover:border-olive/50 transition-all duration-300 hover:shadow-xl">
                        <div class="mb-8">
                            <div class="inline-flex items-center justify-center w-20 h-20 bg-olive/10 rounded-2xl group-hover:bg-olive group-hover:scale-110 transition-all duration-300">
                                <svg class="w-10 h-10 text-olive group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">
                            Régularité
                        </h3>
                        <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                            Interventions planifiées pour un jardin toujours soigné
                        </p>
                    </div>
                </div>

                <!-- Avantage 4 -->
                <div class="group text-center">
                    <div class="bg-white rounded-3xl p-8 sm:p-10 h-full border border-gray-200 hover:border-olive/50 transition-all duration-300 hover:shadow-xl">
                        <div class="mb-8">
                            <div class="inline-flex items-center justify-center w-20 h-20 bg-olive/10 rounded-2xl group-hover:bg-olive group-hover:scale-110 transition-all duration-300">
                                <svg class="w-10 h-10 text-olive group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">
                            Équipement pro
                        </h3>
                        <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                            Outils et produits professionnels pour des résultats optimaux
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section CTA -->
    <section class="py-16 sm:py-20 md:py-24 bg-gradient-to-br from-olive/5 via-yellow/5 to-olive/10 relative overflow-hidden">
        <!-- Formes décoratives -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-olive/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-yellow/10 rounded-full blur-3xl"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-gray-900 mb-8 sm:mb-10 leading-tight">
                Confiez-nous<br>votre jardin
            </h2>
            <p class="text-xl sm:text-2xl md:text-3xl text-gray-600 mb-12 sm:mb-16 font-light leading-relaxed max-w-3xl mx-auto">
                Contactez-nous pour un devis gratuit et personnalisé adapté à vos besoins
            </p>
            <a href="{{ route('contact') }}"
               class="group inline-flex items-center gap-3 px-10 sm:px-12 py-5 sm:py-6 bg-olive text-white font-bold text-lg sm:text-xl rounded-full shadow-xl hover:bg-green-800 transition-all duration-300">
                <span>Demander un devis gratuit</span>
                <svg class="w-6 h-6 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </section>
</main>

@endsection

@section('styles')
<style>
    html {
        scroll-behavior: smooth;
    }

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
