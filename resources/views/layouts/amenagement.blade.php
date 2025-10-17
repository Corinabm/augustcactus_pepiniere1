@extends('layouts.app')

@section('title', 'Aménagement Paysager - August Cactus')

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
                    Aménagement
                </span>
            </li>
        </ol>
    </div>
</nav>

<main class="bg-white">
    <!-- Hero Section - Avec image à droite -->
    <section class="relative overflow-hidden bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-24 md:py-28 lg:py-32">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <!-- Texte à gauche -->
                <div>
                    <div class="mb-6 sm:mb-8">
                        <span class="inline-block px-5 py-2 bg-olive/10 text-olive text-xs sm:text-sm font-semibold rounded-full tracking-wide">
                            AMÉNAGEMENT PAYSAGER
                        </span>
                    </div>
                    <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-gray-900 mb-8 sm:mb-10 leading-[0.95] tracking-tight">
                        Créez l'espace<br>
                        extérieur de<br>
                        vos <span class="text-olive">rêves</span>
                    </h1>
                    <p class="text-lg sm:text-xl md:text-2xl text-gray-600 font-light leading-relaxed">
                        Nous apportons notre savoir pour aider au mieux le client en fonction de ses souhaits et de sa demande.
                    </p>
                </div>

                <!-- Image à droite -->
                <div class="relative lg:order-last w-full">
                    <div class="relative w-full" style="padding-bottom: 75%;">
                        <img src="{{ asset('images/services/amenagement.jpg') }}"
                             alt="Aménagement paysager"
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

    <!-- Citation - Très épurée -->
    <section class="py-20 sm:py-28 md:py-36">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="relative inline-block">
                <div class="absolute -top-6 -left-6 sm:-top-10 sm:-left-10 w-20 h-20 sm:w-24 sm:h-24 bg-olive/5 rounded-full"></div>
                <h2 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-gray-900 leading-tight relative">
                    Tout aménagement<br>
                    est <span class="text-olive italic relative">
                        unique
                        <svg class="absolute -bottom-2 left-0 w-full" height="12" viewBox="0 0 200 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10C50 5 150 5 198 10" stroke="currentColor" stroke-width="3" stroke-linecap="round" class="text-olive/30"/>
                        </svg>
                    </span> !
                </h2>
            </div>
        </div>
    </section>

    <!-- Notre Expertise - Layout aéré -->
    <section class="py-20 sm:py-28 md:py-36 bg-gray-50/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                <!-- Texte -->
                <div>
                    <div class="mb-6">
                        <span class="text-sm font-semibold text-olive/80 tracking-widest uppercase">Notre Expertise</span>
                    </div>
                    <h2 class="text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900 mb-10 leading-tight">
                        Une approche<br>personnalisée
                    </h2>
                    <div class="space-y-6 text-lg sm:text-xl text-gray-700 leading-relaxed">
                        <p>
                            Votre jardin est bien plus qu'un simple espace extérieur. C'est un <strong class="text-gray-900">lieu de vie</strong>, de détente et de partage.
                        </p>
                        <p>
                            Chez <strong class="text-olive">August Cactus</strong>, nous mettons notre expertise au service de vos projets pour créer des espaces uniques qui vous ressemblent.
                        </p>
                        <p>
                            De la conception à la réalisation, notre équipe vous accompagne à chaque étape pour donner vie à vos envies.
                        </p>
                    </div>
                </div>

                <!-- Images en mosaïque -->
                <div class="grid grid-cols-2 gap-6">
                    <div class="space-y-6">
                        <div class="aspect-square rounded-2xl overflow-hidden shadow-lg">
                            <img src="https://picsum.photos/400/400?random=64"
                                 alt="Jardin aménagé"
                                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                        </div>
                        <div class="aspect-[4/5] rounded-2xl overflow-hidden shadow-lg">
                            <img src="https://picsum.photos/400/500?random=65"
                                 alt="Plantes"
                                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                        </div>
                    </div>
                    <div class="mt-12">
                        <div class="aspect-[4/5] rounded-2xl overflow-hidden shadow-lg">
                            <img src="https://picsum.photos/400/500?random=66"
                                 alt="Aménagement"
                                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Notre Processus - Design épuré -->
    <section class="py-20 sm:py-28 md:py-36">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20 sm:mb-28">
                <div class="mb-6">
                    <span class="text-sm font-semibold text-olive/80 tracking-widest uppercase">Comment ça marche</span>
                </div>
                <h2 class="text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900 mb-6">
                    Notre processus
                </h2>
                <p class="text-xl sm:text-2xl text-gray-600 max-w-2xl mx-auto font-light">
                    Un accompagnement sur mesure de A à Z
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 sm:gap-10">
                <!-- Étape 1 -->
                <div class="group">
                    <div class="bg-white rounded-3xl p-8 sm:p-10 h-full border border-gray-200 hover:border-olive/50 transition-all duration-300 hover:shadow-xl">
                        <div class="mb-8">
                            <div class="inline-flex items-center justify-center w-16 h-16 bg-olive/10 rounded-2xl group-hover:bg-olive group-hover:scale-110 transition-all duration-300">
                                <span class="text-2xl font-bold text-olive group-hover:text-white">01</span>
                            </div>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">
                            Consultation
                        </h3>
                        <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                            Rencontre pour comprendre vos besoins et vos envies
                        </p>
                    </div>
                </div>

                <!-- Étape 2 -->
                <div class="group">
                    <div class="bg-white rounded-3xl p-8 sm:p-10 h-full border border-gray-200 hover:border-olive/50 transition-all duration-300 hover:shadow-xl">
                        <div class="mb-8">
                            <div class="inline-flex items-center justify-center w-16 h-16 bg-olive/10 rounded-2xl group-hover:bg-olive group-hover:scale-110 transition-all duration-300">
                                <span class="text-2xl font-bold text-olive group-hover:text-white">02</span>
                            </div>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">
                            Conception
                        </h3>
                        <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                            Élaboration de plans et choix des végétaux adaptés
                        </p>
                    </div>
                </div>

                <!-- Étape 3 -->
                <div class="group">
                    <div class="bg-white rounded-3xl p-8 sm:p-10 h-full border border-gray-200 hover:border-olive/50 transition-all duration-300 hover:shadow-xl">
                        <div class="mb-8">
                            <div class="inline-flex items-center justify-center w-16 h-16 bg-olive/10 rounded-2xl group-hover:bg-olive group-hover:scale-110 transition-all duration-300">
                                <span class="text-2xl font-bold text-olive group-hover:text-white">03</span>
                            </div>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">
                            Réalisation
                        </h3>
                        <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                            Mise en œuvre de l'aménagement par nos experts
                        </p>
                    </div>
                </div>

                <!-- Étape 4 -->
                <div class="group">
                    <div class="bg-white rounded-3xl p-8 sm:p-10 h-full border border-gray-200 hover:border-olive/50 transition-all duration-300 hover:shadow-xl">
                        <div class="mb-8">
                            <div class="inline-flex items-center justify-center w-16 h-16 bg-olive/10 rounded-2xl group-hover:bg-olive group-hover:scale-110 transition-all duration-300">
                                <span class="text-2xl font-bold text-olive group-hover:text-white">04</span>
                            </div>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">
                            Suivi
                        </h3>
                        <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                            Accompagnement et conseils d'entretien personnalisés
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA - Fond clair avec accent olive/yellow -->
    <section class="py-24 sm:py-32 md:py-40 bg-gradient-to-br from-olive/5 via-yellow/5 to-olive/10 relative overflow-hidden">
        <!-- Formes décoratives -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-olive/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-yellow/10 rounded-full blur-3xl"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-gray-900 mb-8 sm:mb-10 leading-tight">
                Prêt à transformer<br>votre jardin ?
            </h2>
            <p class="text-xl sm:text-2xl md:text-3xl text-gray-600 mb-12 sm:mb-16 font-light leading-relaxed max-w-3xl mx-auto">
                Contactez-nous pour une consultation gratuite et recevez un devis personnalisé
            </p>
            <a href="{{ route('contact') }}"
               class="group inline-flex items-center gap-3 px-10 sm:px-12 py-5 sm:py-6 bg-olive text-white font-bold text-lg sm:text-xl rounded-full shadow-xl">
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
