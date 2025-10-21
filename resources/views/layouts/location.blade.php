@extends('layouts.app')

@section('title', 'Location de Plantes - August Cactus')

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
                    Location
                </span>
            </li>
        </ol>
    </div>
</nav>

<main class="bg-white">
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 sm:pt-10 md:pt-12 pb-20 sm:pb-24 md:pb-28 lg:pb-32">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <!-- Texte à gauche -->
                <div>
                    <h1 class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-bold text-gray-900 mb-8 sm:mb-10 leading-[0.95] tracking-tight">
                        Location de<br>
                        <span class="text-olive">plantes</span>
                    </h1>
                    <p class="text-xl sm:text-2xl md:text-3xl text-gray-600 font-light leading-relaxed">
                        Location flexible et sans engagement pour végétaliser vos espaces
                    </p>
                </div>

                <!-- Image à droite -->
                <div class="relative lg:order-last w-full">
                    <div class="relative w-full" style="padding-bottom: 75%;">
                        <img src="{{ asset('images/services/location.jpg') }}"
                             alt="Location de plantes"
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
    <section class="py-12 sm:py-16 md:py-20 bg-gray-50/50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header centré -->
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-2 bg-olive/10 text-olive text-xs font-bold rounded-full tracking-wide mb-4">
                    NOTRE SERVICE
                </span>
                <h2 class="text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900">
                    Une solution flexible et simple
                </h2>
            </div>

            <!-- Bloc 1: Image à gauche + Texte à droite -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center mb-20">
                <!-- Image -->
                <div class="relative" data-aos="fade-right">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl aspect-[4/3]">
                        <img src="https://picsum.photos/700/525?random=70"
                             alt="Large gamme de plantes"
                             class="w-full h-full object-cover hover:scale-110 transition-transform duration-700">
                    </div>
                    <!-- Card flottante -->
                    <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl p-6 shadow-xl max-w-xs hidden lg:block">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 bg-olive/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-7 h-7 text-olive" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 text-lg">Large gamme</p>
                                <p class="text-sm text-gray-600">Toutes tailles</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Texte -->
                <div data-aos="fade-left">
                    <div class="bg-white rounded-3xl p-8 lg:p-10 shadow-lg">
                        <div class="w-16 h-16 bg-olive/10 rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-olive" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">
                            Plantes pour tous vos espaces
                        </h3>
                        <p class="text-lg text-gray-700 leading-relaxed">
                            <strong class="text-olive">August Cactus</strong> propose une large gamme de plantes, compositions de plantes et cactus de différentes tailles en location.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bloc 2: Texte à gauche + Image à droite (inversé) -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
                <!-- Texte (ordre inversé sur desktop) -->
                <div class="order-2 lg:order-1" data-aos="fade-right">
                    <div class="bg-gradient-to-br from-olive/5 to-yellow/5 rounded-3xl p-8 lg:p-10 shadow-lg">
                        <div class="w-16 h-16 bg-olive/20 rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-olive" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">
                            Durée adaptée à vos besoins
                        </h3>
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Événement ponctuel, exposition temporaire ou décoration : nous adaptons la durée de location selon vos projets.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3 text-gray-700">
                                <div class="w-5 h-5 bg-olive rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <span>Devis gratuit personnalisé</span>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700">
                                <div class="w-5 h-5 bg-olive rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <span>Entretien inclus</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Image -->
                <div class="relative order-1 lg:order-2" data-aos="fade-left">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl aspect-[4/3]">
                        <img src="https://picsum.photos/700/525?random=71"
                             alt="Durée flexible"
                             class="w-full h-full object-cover hover:scale-110 transition-transform duration-700">
                    </div>
                    <!-- Badge flottant -->
                    <div class="absolute -top-6 -left-6 bg-olive text-white rounded-2xl px-6 py-4 shadow-2xl hidden lg:block transform -rotate-3 hover:rotate-0 transition-transform duration-300">
                        <p class="text-3xl font-bold">100%</p>
                        <p class="text-sm font-medium">Satisfaction</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Section Nos Plantes à Louer -->
    <section class="py-12 sm:py-16 md:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header centré -->
            <div class="text-center mb-12 sm:mb-16">
                <span class="inline-block px-4 py-2 bg-olive/10 text-olive text-xs font-bold rounded-full tracking-wide mb-4">
                    NOTRE CATALOGUE
                </span>
                <h2 class="text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900 mb-6">
                    Nos plantes disponibles<br>à la location
                </h2>
                <p class="text-xl sm:text-2xl text-gray-600 max-w-2xl mx-auto font-light">
                    Une large sélection de plantes et cactus pour tous vos besoins
                </p>
            </div>

            <!-- Carousel de plantes -->
            <div class="relative">
                <!-- Container du carousel -->
                <div class="overflow-hidden" id="plantsCarousel">
                    <div class="flex transition-transform duration-500 ease-out" id="carouselTrack">
                        <!-- Plante 1 - Cactus -->
                        <div class="min-w-full sm:min-w-[50%] lg:min-w-[33.333%] px-4">
                            <div class="group">
                                <div class="bg-white rounded-3xl overflow-hidden border border-gray-200 hover:border-olive/50 transition-all duration-300 hover:shadow-2xl">
                                    <!-- Image -->
                                    <div class="relative overflow-hidden aspect-[4/3]">
                                        <img src="https://picsum.photos/600/450?random=80"
                                             alt="Cactus"
                                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                        <div class="absolute top-4 right-4 bg-olive text-white px-4 py-2 rounded-full text-sm font-bold">
                                            Disponible
                                        </div>
                                    </div>
                                    <!-- Contenu -->
                                    <div class="p-6 sm:p-8">
                                        <h3 class="text-2xl font-bold text-gray-900 mb-3">
                                            Cactus
                                        </h3>
                                        <p class="text-gray-600 mb-4 leading-relaxed">
                                            Idéal pour une ambiance désertique et moderne. Nécessite peu d'entretien.
                                        </p>
                                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                            <span class="text-sm text-gray-500">Plusieurs tailles</span>
                                            <span class="text-olive font-bold text-lg">Sur devis</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Plante 2 - Plantes vertes -->
                        <div class="min-w-full sm:min-w-[50%] lg:min-w-[33.333%] px-4">
                            <div class="group">
                                <div class="bg-white rounded-3xl overflow-hidden border border-gray-200 hover:border-olive/50 transition-all duration-300 hover:shadow-2xl">
                                    <!-- Image -->
                                    <div class="relative overflow-hidden aspect-[4/3]">
                                        <img src="https://picsum.photos/600/450?random=81"
                                             alt="Plantes vertes"
                                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                        <div class="absolute top-4 right-4 bg-olive text-white px-4 py-2 rounded-full text-sm font-bold">
                                            Disponible
                                        </div>
                                    </div>
                                    <!-- Contenu -->
                                    <div class="p-6 sm:p-8">
                                        <h3 class="text-2xl font-bold text-gray-900 mb-3">
                                            Plantes vertes
                                        </h3>
                                        <p class="text-gray-600 mb-4 leading-relaxed">
                                            Pour apporter de la fraîcheur et purifier l'air de vos espaces.
                                        </p>
                                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                            <span class="text-sm text-gray-500">Plusieurs variétés</span>
                                            <span class="text-olive font-bold text-lg">Sur devis</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Plante 3 - Compositions -->
                        <div class="min-w-full sm:min-w-[50%] lg:min-w-[33.333%] px-4">
                            <div class="group">
                                <div class="bg-white rounded-3xl overflow-hidden border border-gray-200 hover:border-olive/50 transition-all duration-300 hover:shadow-2xl">
                                    <!-- Image -->
                                    <div class="relative overflow-hidden aspect-[4/3]">
                                        <img src="https://picsum.photos/600/450?random=82"
                                             alt="Compositions"
                                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                        <div class="absolute top-4 right-4 bg-olive text-white px-4 py-2 rounded-full text-sm font-bold">
                                            Disponible
                                        </div>
                                    </div>
                                    <!-- Contenu -->
                                    <div class="p-6 sm:p-8">
                                        <h3 class="text-2xl font-bold text-gray-900 mb-3">
                                            Compositions
                                        </h3>
                                        <p class="text-gray-600 mb-4 leading-relaxed">
                                            Assemblages harmonieux de plusieurs plantes pour un effet décoratif optimal.
                                        </p>
                                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                            <span class="text-sm text-gray-500">Créations sur mesure</span>
                                            <span class="text-olive font-bold text-lg">Sur devis</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Plante 4 - Plantes XXL -->
                        <div class="min-w-full sm:min-w-[50%] lg:min-w-[33.333%] px-4">
                            <div class="group">
                                <div class="bg-white rounded-3xl overflow-hidden border border-gray-200 hover:border-olive/50 transition-all duration-300 hover:shadow-2xl">
                                    <!-- Image -->
                                    <div class="relative overflow-hidden aspect-[4/3]">
                                        <img src="https://picsum.photos/600/450?random=83"
                                             alt="Plantes XXL"
                                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                        <div class="absolute top-4 right-4 bg-olive text-white px-4 py-2 rounded-full text-sm font-bold">
                                            Disponible
                                        </div>
                                    </div>
                                    <!-- Contenu -->
                                    <div class="p-6 sm:p-8">
                                        <h3 class="text-2xl font-bold text-gray-900 mb-3">
                                            Plantes XXL
                                        </h3>
                                        <p class="text-gray-600 mb-4 leading-relaxed">
                                            Plantes de grande taille pour un impact visuel maximal lors de vos événements.
                                        </p>
                                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                            <span class="text-sm text-gray-500">Grand format</span>
                                            <span class="text-olive font-bold text-lg">Sur devis</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Plante 5 - Plantes fleuries -->
                        <div class="min-w-full sm:min-w-[50%] lg:min-w-[33.333%] px-4">
                            <div class="group">
                                <div class="bg-white rounded-3xl overflow-hidden border border-gray-200 hover:border-olive/50 transition-all duration-300 hover:shadow-2xl">
                                    <!-- Image -->
                                    <div class="relative overflow-hidden aspect-[4/3]">
                                        <img src="https://picsum.photos/600/450?random=84"
                                             alt="Plantes fleuries"
                                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                        <div class="absolute top-4 right-4 bg-olive text-white px-4 py-2 rounded-full text-sm font-bold">
                                            Saisonnier
                                        </div>
                                    </div>
                                    <!-- Contenu -->
                                    <div class="p-6 sm:p-8">
                                        <h3 class="text-2xl font-bold text-gray-900 mb-3">
                                            Plantes fleuries
                                        </h3>
                                        <p class="text-gray-600 mb-4 leading-relaxed">
                                            Ajoutez de la couleur et de la vie à vos événements avec nos plantes fleuries.
                                        </p>
                                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                            <span class="text-sm text-gray-500">Selon saison</span>
                                            <span class="text-olive font-bold text-lg">Sur devis</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Plante 6 - Plantes suspendues -->
                        <div class="min-w-full sm:min-w-[50%] lg:min-w-[33.333%] px-4">
                            <div class="group">
                                <div class="bg-white rounded-3xl overflow-hidden border border-gray-200 hover:border-olive/50 transition-all duration-300 hover:shadow-2xl">
                                    <!-- Image -->
                                    <div class="relative overflow-hidden aspect-[4/3]">
                                        <img src="https://picsum.photos/600/450?random=85"
                                             alt="Plantes suspendues"
                                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                        <div class="absolute top-4 right-4 bg-olive text-white px-4 py-2 rounded-full text-sm font-bold">
                                            Disponible
                                        </div>
                                    </div>
                                    <!-- Contenu -->
                                    <div class="p-6 sm:p-8">
                                        <h3 class="text-2xl font-bold text-gray-900 mb-3">
                                            Plantes suspendues
                                        </h3>
                                        <p class="text-gray-600 mb-4 leading-relaxed">
                                            Optimisez l'espace et créez du relief avec nos plantes suspendues.
                                        </p>
                                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                            <span class="text-sm text-gray-500">Installation incluse</span>
                                            <span class="text-olive font-bold text-lg">Sur devis</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Boutons de navigation -->
                <button id="prevBtn" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 sm:-translate-x-6 z-10 bg-white hover:bg-olive group rounded-full p-3 sm:p-4 shadow-xl border-2 border-gray-200 hover:border-olive transition-all duration-300">
                    <svg class="w-6 h-6 text-gray-900 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button id="nextBtn" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 sm:translate-x-6 z-10 bg-white hover:bg-olive group rounded-full p-3 sm:p-4 shadow-xl border-2 border-gray-200 hover:border-olive transition-all duration-300">
                    <svg class="w-6 h-6 text-gray-900 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>

            <!-- Indicateurs de slides -->
            <div class="flex justify-center gap-2 mt-8">
                <button class="carousel-indicator w-3 h-3 rounded-full bg-olive transition-all duration-300" data-slide="0"></button>
                <button class="carousel-indicator w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 transition-all duration-300" data-slide="1"></button>
                <button class="carousel-indicator w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 transition-all duration-300" data-slide="2"></button>
                <button class="carousel-indicator w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 transition-all duration-300" data-slide="3"></button>
                <button class="carousel-indicator w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 transition-all duration-300" data-slide="4"></button>
                <button class="carousel-indicator w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 transition-all duration-300" data-slide="5"></button>
            </div>

            <!-- CTA -->
            <div class="text-center mt-12 sm:mt-16">
                <p class="text-lg text-gray-600 mb-6">
                    Vous ne trouvez pas ce que vous cherchez ?
                </p>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-3 px-8 py-4 bg-olive text-white font-bold text-lg rounded-full shadow-lg hover:bg-green-800 transition-all duration-300">
                    <span>Contactez-nous pour un devis personnalisé</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
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
                    Pourquoi louer<br>vos plantes ?
                </h2>
                <p class="text-xl sm:text-2xl text-gray-600 max-w-2xl mx-auto font-light">
                    Une formule pratique et sans contraintes
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 sm:gap-10">
                <!-- Avantage 1 -->
                <div class="group text-center">
                    <div class="bg-white rounded-3xl p-8 sm:p-10 h-full border border-gray-200 hover:border-olive/50 transition-all duration-300 hover:shadow-xl">
                        <div class="mb-8">
                            <div class="inline-flex items-center justify-center w-20 h-20 bg-olive/10 rounded-2xl group-hover:bg-olive group-hover:scale-110 transition-all duration-300">
                                <svg class="w-10 h-10 text-olive group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">
                            Économique
                        </h3>
                        <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                            Payez uniquement la durée d'utilisation
                        </p>
                    </div>
                </div>

                <!-- Avantage 2 -->
                <div class="group text-center">
                    <div class="bg-white rounded-3xl p-8 sm:p-10 h-full border border-gray-200 hover:border-olive/50 transition-all duration-300 hover:shadow-xl">
                        <div class="mb-8">
                            <div class="inline-flex items-center justify-center w-20 h-20 bg-olive/10 rounded-2xl group-hover:bg-olive group-hover:scale-110 transition-all duration-300">
                                <svg class="w-10 h-10 text-olive group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">
                            Flexible
                        </h3>
                        <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                            Adaptez le nombre et les variétés selon vos besoins
                        </p>
                    </div>
                </div>

                <!-- Avantage 3 -->
                <div class="group text-center">
                    <div class="bg-white rounded-3xl p-8 sm:p-10 h-full border border-gray-200 hover:border-olive/50 transition-all duration-300 hover:shadow-xl">
                        <div class="mb-8">
                            <div class="inline-flex items-center justify-center w-20 h-20 bg-olive/10 rounded-2xl group-hover:bg-olive group-hover:scale-110 transition-all duration-300">
                                <svg class="w-10 h-10 text-olive group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">
                            Sans entretien
                        </h3>
                        <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                            Nous gérons l'entretien et le remplacement si nécessaire
                        </p>
                    </div>
                </div>

                <!-- Avantage 4 -->
                <div class="group text-center">
                    <div class="bg-white rounded-3xl p-8 sm:p-10 h-full border border-gray-200 hover:border-olive/50 transition-all duration-300 hover:shadow-xl">
                        <div class="mb-8">
                            <div class="inline-flex items-center justify-center w-20 h-20 bg-olive/10 rounded-2xl group-hover:bg-olive group-hover:scale-110 transition-all duration-300">
                                <svg class="w-10 h-10 text-olive group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">
                            Toujours parfaites
                        </h3>
                        <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                            Des plantes en excellent état pour une décoration impeccable
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Section Comment ça marche -->
    <section class="py-12 sm:py-16 md:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 sm:mb-16">
                <div class="mb-6">
                    <span class="text-sm font-semibold text-olive/80 tracking-widest uppercase">Notre Processus</span>
                </div>
                <h2 class="text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900 mb-6">
                    Comment ça marche ?
                </h2>
                <p class="text-xl sm:text-2xl text-gray-600 max-w-2xl mx-auto font-light">
                    Un processus simple en 3 étapes
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 sm:gap-10">
                <!-- Étape 1 -->
                <div class="group">
                    <div class="bg-white rounded-3xl p-8 sm:p-10 h-full border border-gray-200 hover:border-olive/50 transition-all duration-300 hover:shadow-xl">
                        <div class="mb-8">
                            <div class="inline-flex items-center justify-center w-16 h-16 bg-olive/10 rounded-2xl group-hover:bg-olive group-hover:scale-110 transition-all duration-300">
                                <span class="text-2xl font-bold text-olive group-hover:text-white">01</span>
                            </div>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">
                            Demande
                        </h3>
                        <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                            Contactez-nous avec vos besoins et la durée souhaitée
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
                            Devis
                        </h3>
                        <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                            Recevez votre devis personnalisé sous 24h
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
                            Livraison
                        </h3>
                        <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                            Nous livrons et installons les plantes chez vous
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
                Besoin de plantes<br>pour votre événement ?
            </h2>
            <p class="text-xl sm:text-2xl md:text-3xl text-gray-600 mb-12 sm:mb-16 font-light leading-relaxed max-w-3xl mx-auto">
                Contactez-nous pour une consultation gratuite et recevez un devis personnalisé
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

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const track = document.getElementById('carouselTrack');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const indicators = document.querySelectorAll('.carousel-indicator');

        let currentSlide = 0;
        const totalSlides = 6;

        // Fonction pour obtenir le nombre de slides visibles selon la largeur d'écran
        function getSlidesPerView() {
            if (window.innerWidth >= 1024) return 3; // lg
            if (window.innerWidth >= 640) return 2;  // sm
            return 1; // mobile
        }

        // Fonction pour mettre à jour la position du carousel
        function updateCarousel() {
            const slidesPerView = getSlidesPerView();
            const maxSlide = totalSlides - slidesPerView;

            // Limiter currentSlide
            if (currentSlide > maxSlide) {
                currentSlide = maxSlide;
            }
            if (currentSlide < 0) {
                currentSlide = 0;
            }

            const slideWidth = 100 / slidesPerView;
            const offset = -(currentSlide * slideWidth);
            track.style.transform = `translateX(${offset}%)`;

            // Mettre à jour les indicateurs
            indicators.forEach((indicator, index) => {
                if (index === currentSlide) {
                    indicator.classList.remove('bg-gray-300');
                    indicator.classList.add('bg-olive');
                } else {
                    indicator.classList.remove('bg-olive');
                    indicator.classList.add('bg-gray-300');
                }
            });

            // Gérer la visibilité des boutons
            prevBtn.style.opacity = currentSlide === 0 ? '0.5' : '1';
            prevBtn.style.cursor = currentSlide === 0 ? 'not-allowed' : 'pointer';
            nextBtn.style.opacity = currentSlide >= maxSlide ? '0.5' : '1';
            nextBtn.style.cursor = currentSlide >= maxSlide ? 'not-allowed' : 'pointer';
        }

        // Navigation précédent
        prevBtn.addEventListener('click', function() {
            if (currentSlide > 0) {
                currentSlide--;
                updateCarousel();
            }
        });

        // Navigation suivant
        nextBtn.addEventListener('click', function() {
            const maxSlide = totalSlides - getSlidesPerView();
            if (currentSlide < maxSlide) {
                currentSlide++;
                updateCarousel();
            }
        });

        // Indicateurs cliquables
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', function() {
                currentSlide = index;
                updateCarousel();
            });
        });

        // Gestion du redimensionnement de la fenêtre
        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                updateCarousel();
            }, 250);
        });

        // Support du swipe sur mobile
        let touchStartX = 0;
        let touchEndX = 0;

        track.addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].screenX;
        }, false);

        track.addEventListener('touchend', function(e) {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, false);

        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = touchStartX - touchEndX;

            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    // Swipe left (next)
                    const maxSlide = totalSlides - getSlidesPerView();
                    if (currentSlide < maxSlide) {
                        currentSlide++;
                        updateCarousel();
                    }
                } else {
                    // Swipe right (prev)
                    if (currentSlide > 0) {
                        currentSlide--;
                        updateCarousel();
                    }
                }
            }
        }

        // Navigation au clavier
        document.addEventListener('keydown', function(e) {
            if (e.key === 'ArrowLeft') {
                prevBtn.click();
            } else if (e.key === 'ArrowRight') {
                nextBtn.click();
            }
        });

        // Initialisation
        updateCarousel();
    });
</script>
@endsection
