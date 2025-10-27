@extends('layouts.app')

@section('title', 'Accueil - August Cactus')

@section('content')

    <!-- Bannière Héros -->
    <section class="relative min-h-screen flex items-center overflow-hidden">
        <!-- Image de background avec effet parallax -->
        <div class="absolute inset-0 bg-cover bg-center bg-fixed" style="background-image: url('{{ asset('images/hero-background.jpg') }}');"></div>
        <!-- Gradient overlay moderne -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/60"></div>

        <!-- Contenu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full py-32">
            <div class="max-w-5xl">
                <!-- Badge subtil -->
                <div class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-md border border-white/20 rounded-full mb-8 animate-fade-in">
                    <span class="text-white/90 text-sm font-medium tracking-wide">🌿 Pépinière locale depuis 30 ans</span>
                </div>

                <!-- Titre massif moderne -->
                <h1 class="text-4xl sm:text-6xl md:text-8xl lg:text-9xl font-bold mb-8 text-white leading-[0.95] tracking-tight animate-fade-in-up">
                    Un jardin autrement
                </h1>

                <!-- Sous-titre élégant -->
                <p class="text-lg sm:text-xl md:text-2xl lg:text-3xl text-white/80 mb-12 max-w-2xl font-light leading-relaxed animate-fade-in-up-delay">
                    Découvrez un large choix de cactus, succulentes et de plantes diverses
                </p>

                <!-- CTA moderne et subtil -->
                <div class="flex flex-col sm:flex-row gap-4 animate-fade-in-up-delay-2">
                    <a href="{{ route('plantes.catalogue') }}" class="group inline-flex items-center justify-center px-8 py-4 bg-white text-olive font-semibold rounded-full hover:bg-yellow">
                        <span>Explorer le catalogue</span>
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-4 bg-white/10 backdrop-blur-md border border-white/20 text-white font-semibold rounded-full hover:bg-white/20 transition-all duration-300">
                        Nous contacter
                    </a>
                </div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </section>

    <!-- Section Services -->
    <section class="py-16 sm:py-24 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Titre et sous-titre -->
            <div class="mb-12 sm:mb-16">
                <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-black mb-3 sm:mb-4 leading-tight">
                    Nos Services
                </h2>
                <p class="text-base sm:text-lg md:text-xl text-gray-500 font-light max-w-2xl">
                    De l'aménagement à l'entretien, nous créons des espaces verts qui vous ressemblent
                </p>
            </div>

            <!-- Grid responsive des cartes de services -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <!-- Carte 1 - Aménagement -->
                <a href="{{ route('amenagement') }}" class="group flex flex-col">
                    <div class="relative rounded-2xl sm:rounded-3xl overflow-hidden aspect-[4/3] mb-4 sm:mb-6">
                        <!-- Image de fond -->
                        <img src="{{ asset('images/service-amenagement.jpg') }}" alt="Aménagement Paysager" loading="lazy" class="absolute inset-0 w-full h-full object-cover">

                        <!-- Overlay gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>

                        <!-- Bouton fléché en haut à droite -->
                        <div class="absolute top-4 right-4 sm:top-6 sm:right-6 w-10 h-10 sm:w-12 sm:h-12 bg-white rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-black transition-transform group-hover:translate-x-1 group-hover:-translate-y-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="text-center sm:text-left px-2 sm:px-0">
                        <h3 class="text-lg sm:text-xl font-bold text-black mb-2 font-sans">Aménagement</h3>
                        <p class="text-sm sm:text-base text-gray-500 leading-relaxed">Sublimez votre extérieur avec un aménagement paysager pensé pour vous</p>
                    </div>
                </a>

                <!-- Carte 2 - Location de plantes -->
                <a href="{{ route('location') }}" class="group flex flex-col">
                    <div class="relative rounded-2xl sm:rounded-3xl overflow-hidden aspect-[4/3] mb-4 sm:mb-6">
                        <!-- Image de fond -->
                        <img src="{{ asset('images/service-location.jpg') }}" alt="Location de Plantes" loading="lazy" class="absolute inset-0 w-full h-full object-cover">

                        <!-- Overlay gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>

                        <!-- Bouton fléché en haut à droite -->
                        <div class="absolute top-4 right-4 sm:top-6 sm:right-6 w-10 h-10 sm:w-12 sm:h-12 bg-white rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-black transition-transform group-hover:translate-x-1 group-hover:-translate-y-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="text-center sm:text-left px-2 sm:px-0">
                        <h3 class="text-lg sm:text-xl font-bold text-black mb-2 font-sans">Location de plantes</h3>
                        <p class="text-sm sm:text-base text-gray-500 leading-relaxed">Louez nos plantes pour événements ou espaces professionnels</p>
                    </div>
                </a>

                <!-- Carte 3 - Entretien -->
                <a href="{{ route('services') }}#entretien" class="group flex flex-col">
                    <div class="relative rounded-2xl sm:rounded-3xl overflow-hidden aspect-[4/3] mb-4 sm:mb-6">
                        <!-- Image de fond -->
                        <img src="{{ asset('images/service-entretien.jpg') }}" alt="Entretien" loading="lazy" class="absolute inset-0 w-full h-full object-cover">

                        <!-- Overlay gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>

                        <!-- Bouton fléché en haut à droite -->
                        <div class="absolute top-4 right-4 sm:top-6 sm:right-6 w-10 h-10 sm:w-12 sm:h-12 bg-white rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-black transition-transform group-hover:translate-x-1 group-hover:-translate-y-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="text-center sm:text-left px-2 sm:px-0">
                        <h3 class="text-lg sm:text-xl font-bold text-black mb-2 font-sans">Entretien</h3>
                        <p class="text-sm sm:text-base text-gray-500 leading-relaxed">Confiez-nous l'entretien de vos jardins et plantes en toute sérénité</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Section Statistiques -->
    <section class="py-40 bg-gradient-to-br from-olive via-green-800 to-olive relative overflow-hidden">
        <!-- Effets de background animés -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-10 left-10 w-72 h-72 bg-yellow rounded-full filter blur-3xl animate-pulse"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 bg-green-400 rounded-full filter blur-3xl animate-pulse delay-700"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-white rounded-full filter blur-3xl animate-pulse delay-1000"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Titre moderne avec layout asymétrique -->
            <div class="grid md:grid-cols-2 gap-12 items-start md:items-center mb-20">
                <div>
                    <h2 class="text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight">
                        Pourquoi nous choisir ?
                    </h2>
                    <p class="text-xl text-white/70 font-light leading-relaxed">
                        Plus de trois décennies d'expertise au service de votre passion pour les plantes
                    </p>
                </div>

                <!-- CTA secondaire -->
                <div class="flex justify-start md:justify-end">
                    <a href="{{ route('a-propos') }}" class="group inline-flex items-center px-6 py-3 bg-white/10 backdrop-blur-md border border-white/20 text-white font-semibold rounded-full hover:bg-white/20 transition-all duration-300">
                        <span>Notre histoire</span>
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Statistiques en grid moderne non symétrique -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Stat 1 - Grande (2 colonnes sur lg) -->
                <div class="group md:col-span-2 backdrop-blur-xl bg-white/10 rounded-3xl p-10 md:p-12 border border-white/20 hover:bg-white/15 transition-all duration-500">
                    <div class="flex flex-col md:flex-row items-start md:items-center justify-between">
                        <div>
                            <div class="text-7xl md:text-8xl lg:text-9xl font-bold text-white mb-4 leading-none">99%</div>
                            <p class="text-2xl md:text-3xl text-white font-light">Clients Satisfaits</p>
                            <p class="text-white/60 mt-3 max-w-md">Une satisfaction client qui témoigne de notre engagement qualité</p>
                        </div>
                        <div class="mt-6 md:mt-0">
                            <svg class="w-16 h-16 md:w-24 md:h-24 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Stat 2 - Petite (1 colonne) -->
                <div class="group backdrop-blur-xl bg-white/10 rounded-3xl p-8 md:p-10 border border-white/20 hover:bg-white/15 transition-all duration-500">
                    <div class="text-6xl md:text-7xl font-bold text-white mb-3 leading-none">+680</div>
                    <p class="text-xl text-white font-light mb-2">Variétés</p>
                    <p class="text-white/60 text-sm">de plantes disponibles</p>
                </div>

                <!-- Stat 3 - Moyenne avec badge (1 colonne) -->
                <div class="group backdrop-blur-xl bg-white/10 rounded-3xl p-8 md:p-10 border border-white/20 hover:bg-white/15 transition-all duration-500">
                    <div class="inline-flex items-center px-4 py-2 bg-white/20 border border-white/30 rounded-full mb-6">
                        <span class="text-white text-sm font-bold">Depuis 1995</span>
                    </div>
                    <div class="text-6xl md:text-7xl font-bold text-white mb-3 leading-none">30 ans</div>
                    <p class="text-xl text-white font-light">d'Expertise</p>
                </div>

                <!-- Stat 4 - Extra info (2 colonnes sur md, 4 colonnes sur lg) -->
                <div class="group md:col-span-2 lg:col-span-4 backdrop-blur-xl bg-gradient-to-br from-white/20 to-white/5 rounded-3xl p-8 md:p-10 border border-white/30 hover:border-white/50 transition-all duration-500">
                    <div class="flex flex-col md:flex-row items-start justify-between gap-6">
                        <div class="flex-1">
                            <h3 class="text-2xl md:text-3xl font-bold text-white mb-3">Certification "Coeur Martinique"</h3>
                            <p class="text-white/80 text-lg">Fiers d'être certifiés par la Chambre d'agriculture Martinique, nous valorisons le savoir-faire martiniquais</p>
                        </div>
                        <svg class="w-12 h-12 md:w-16 md:h-16 text-white/50 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Catalogue -->
    <section id="catalogue" class="py-40 bg-gradient-to-b from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header moderne avec layout split -->
            <div class="grid md:grid-cols-2 gap-12 items-start md:items-end mb-20">
                <div>
                    <h2 class="text-5xl md:text-7xl font-bold text-black mb-6 leading-tight">
                        Notre catalogue
                    </h2>
                    <p class="text-xl text-gray-600 font-light leading-relaxed">
                        Plus de 680 variétés sélectionnées avec soin pour embellir votre quotidien
                    </p>
                </div>
                <div class="flex justify-center md:justify-end">
                    <a href="{{ route('plantes.catalogue') }}" class="group inline-flex items-center px-8 py-4 bg-olive text-white font-semibold rounded-full shadow-lg">
                        <span>Voir tout le catalogue</span>
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Layout avec Plante du Mois à gauche et autres cartes à droite -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Gauche - La Plante du Mois -->
                <a href="{{ route('plantes.catalogue') }}" class="group relative rounded-3xl overflow-hidden hover:shadow-2xl transition-all duration-500 min-h-[500px]">
                    <img src="{{ asset('images/plante-du-mois.jpg') }}" alt="Plante du Mois" loading="lazy" class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-8 md:p-12">
                        <h3 class="text-3xl md:text-4xl font-bold text-white mb-4 leading-tight">Plante du mois</h3>
                        <p class="text-white/90 text-base md:text-lg mb-6">Chaque mois, nous mettons en avant une espèce rare ou particulièrement remarquable de notre collection</p>
                        <div class="flex items-center text-white font-semibold text-lg group-hover:translate-x-2 transition-transform">
                            <span>Voir la sélection</span>
                            <svg class="w-6 h-6 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Droite - Grid des 3 autres cartes -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Catégorie 1 - Cactus -->
                    <a href="{{ route('plantes.catalogue') }}?categorie=cactus" class="group relative rounded-3xl overflow-hidden hover:shadow-2xl transition-all duration-500 min-h-[240px]">
                        <img src="{{ asset('images/categorie-cactus.jpg') }}" alt="Cactus" loading="lazy" class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-olive/90 via-olive/40 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <div class="inline-flex items-center px-3 py-1.5 bg-white/20 backdrop-blur-sm border border-white/30 rounded-full mb-3">
                                <span class="text-white text-xs font-bold">Le plus populaire</span>
                            </div>
                            <h3 class="text-xl md:text-2xl font-bold text-white mb-2 leading-tight">Cactus</h3>
                            <p class="text-white/80 text-sm mb-3">Des variétés résistantes et fascinantes</p>
                            <div class="flex items-center text-white text-sm font-semibold group-hover:translate-x-2 transition-transform">
                                <span>Explorer</span>
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </div>
                        </div>
                    </a>

                    <!-- Catégorie 2 - Succulentes -->
                    <a href="{{ route('plantes.catalogue') }}?categorie=succulentes" class="group relative rounded-3xl overflow-hidden hover:shadow-2xl transition-all duration-500 min-h-[240px]">
                        <img src="{{ asset('images/categorie-succulentes.jpg') }}" alt="Succulentes" loading="lazy" class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-xl md:text-2xl font-bold text-white mb-2 leading-tight">Succulentes</h3>
                            <p class="text-white/80 text-sm mb-3">Élégantes et faciles d'entretien</p>
                            <div class="flex items-center text-white text-sm font-semibold group-hover:translate-x-2 transition-transform">
                                <span>Découvrir</span>
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </div>
                        </div>
                    </a>

                    <!-- Catégorie 3 - Plantes Diverses (prend toute la largeur sur tablette/desktop) -->
                    <a href="{{ route('plantes.catalogue') }}?categorie=diverses" class="group relative sm:col-span-2 rounded-3xl overflow-hidden hover:shadow-2xl transition-all duration-500 min-h-[240px]">
                        <img src="{{ asset('images/categorie-diverses.jpg') }}" alt="Plantes Diverses" loading="lazy" class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-xl md:text-2xl font-bold text-white mb-2 leading-tight">Plantes diverses</h3>
                            <p class="text-white/80 text-sm mb-3">Tropicales, fleuries et plus encore pour créer votre jardin unique</p>
                            <div class="flex items-center text-white text-sm font-semibold group-hover:translate-x-2 transition-transform">
                                <span>Découvrir</span>
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Localisation -->
    <section class="py-40 bg-gradient-to-b from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header avec layout moderne -->
            <div class="mb-20">
                <h2 class="text-5xl md:text-7xl font-bold text-black mb-6 leading-tight">
                    Venez nous rendre visite
                </h2>
                <p class="text-xl text-gray-600 font-light max-w-2xl">
                    Découvrez nos plantes sur place, nous vous attendons
                </p>
            </div>

            <!-- Layout moderne avec carte et infos -->
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">
                <!-- Carte Google Maps - Plus grande et moderne -->
                <div class="lg:col-span-3 rounded-3xl overflow-hidden shadow-2xl h-[500px] md:h-[600px]">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1217.0563396882171!2d-60.97040568195123!3d14.655562777735451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sChemin%20Petite%20Rivi%C3%A8re%2C%20Rond%20point%20de%20Pelletier!5e0!3m2!1sfr!2sfr!4v1760554022470!5m2!1sfr!2sfr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <!-- Cards d'informations modernisées -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Card Horaires -->
                    <div class="bg-white rounded-3xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-yellow/20 rounded-2xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-olive" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-4 flex-1">
                                <h3 class="text-xl font-bold text-olive mb-4">Horaires d'ouverture</h3>
                                <div class="space-y-2 text-gray-600">
                                    <p class="flex justify-between"><span class="font-semibold">Lundi - Vendredi</span> <span>9h - 12h</span></p>
                                    <p class="flex justify-between"><span class="font-semibold">Samedi</span> <span>9h - 12h</span></p>
                                    <p class="flex justify-between"><span class="font-semibold">Dimanche</span> <span class="text-red-500">Fermé</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Adresse -->
                    <div class="bg-olive rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-yellow rounded-2xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-olive" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-4 flex-1">
                                <h3 class="text-xl font-bold text-white mb-3">Notre adresse</h3>
                                <p class="text-white/90 text-lg">Chemin Petite Rivière<br>Rond point de Pelletier<br>97232 Le Lamentin</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card Contact -->
                    <div class="bg-white rounded-3xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-yellow/20 rounded-2xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-olive" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div class="ml-4 flex-1">
                                <h3 class="text-xl font-bold text-olive mb-4">Nous contacter</h3>
                                <div class="space-y-3">
                                    <a href="tel:0696805974" class="flex items-center text-gray-600 hover:text-olive transition-colors group">
                                        <span class="font-semibold mr-2">Téléphone:</span>
                                        <span class="group-hover:underline">0696 80 59 74</span>
                                    </a>
                                    <a href="mailto:augustcactus@gmail.com" class="flex items-center text-gray-600 hover:text-olive transition-colors group">
                                        <span class="font-semibold mr-2">Email:</span>
                                        <span class="group-hover:underline">augustcactus@gmail.com</span>
                                    </a>
                                </div>
                                <a href="{{ route('contact') }}" class="group mt-6 inline-flex items-center px-6 py-3 bg-olive text-white font-semibold rounded-full">
                                    <span>Formulaire de contact</span>
                                    <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('styles')
<style>
    /* Animations d'apparition */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

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

    .animate-fade-in {
        animation: fadeIn 0.8s ease-out;
    }

    .animate-fade-in-up {
        animation: fadeInUp 1s ease-out;
    }

    .animate-fade-in-up-delay {
        animation: fadeInUp 1s ease-out 0.2s both;
    }

    .animate-fade-in-up-delay-2 {
        animation: fadeInUp 1s ease-out 0.4s both;
    }

    /* Delays pour animations pulse */
    .delay-700 {
        animation-delay: 700ms;
    }

    .delay-1000 {
        animation-delay: 1000ms;
    }

    /* Effet parallax sur le hero */
    @media (min-width: 768px) {
        .bg-fixed {
            background-attachment: fixed;
        }
    }

    /* Smooth scroll */
    html {
        scroll-behavior: smooth;
    }

    /* Amélioration des transitions */
    * {
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    }
</style>
@endsection
