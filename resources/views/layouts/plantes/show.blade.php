@extends('layouts.app')

@section('title', $plante->nom_commun . ' - Fiche Produit')

@section('content')
    <!-- Espacement pour la navbar fixe -->
    <div class="pt-16 sm:pt-20"></div>

    <main class="bg-gradient-to-b from-white to-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">

            <!-- Fil d'Ariane moderne -->
            <nav class="mb-8 sm:mb-10 flex items-center gap-2 text-sm overflow-x-auto">
                <a href="{{ route('index') }}" class="text-gray-500 hover:text-olive transition-colors duration-300 whitespace-nowrap">Accueil</a>
                <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <a href="{{ route('plantes.catalogue') }}" class="text-gray-500 hover:text-olive transition-colors duration-300 whitespace-nowrap">Nos plantes</a>
                <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <a href="{{ route('plantes.catalogue') }}?categorie={{ strtolower($plante->categorie->nom) }}" class="text-gray-500 hover:text-olive transition-colors duration-300 whitespace-nowrap">{{ $plante->categorie->nom }}</a>
                <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="text-gray-900 font-medium whitespace-nowrap">{{ $plante->nom_commun }}</span>
            </nav>

            <!-- Section Hero / Produit Principal -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 xl:gap-16 mb-16 lg:mb-24">

                <!-- Galerie d'images (gauche) -->
                <div class="flex flex-col lg:flex-row gap-4 lg:gap-4">
                    @php
                        $allImages = collect([$plante->photo_principale_url])
                            ->concat($plante->photos->pluck('url'))
                            ->filter()
                            ->unique()
                            ->values();
                    @endphp

                    <!-- Galerie mobile (carousel avec swipe) -->
                    <div class="lg:hidden">
                        <div class="overflow-hidden rounded-2xl">
                            <div id="mobileGallery" class="flex overflow-x-auto snap-x snap-mandatory" style="scroll-behavior: smooth; scrollbar-width: none; -ms-overflow-style: none;">
                                @foreach($allImages as $index => $imageUrl)
                                    <div class="flex-shrink-0 w-full snap-center">
                                        <div class="relative bg-gray-100 overflow-hidden aspect-square">
                                            <img src="{{ $imageUrl }}"
                                                 alt="{{ $plante->nom_commun }}"
                                                 loading="{{ $index === 0 ? 'eager' : 'lazy' }}"
                                                 class="w-full h-full object-cover">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        @if($allImages->count() > 1)
                            <!-- Indicateurs de pagination modernes -->
                            <div class="flex justify-center gap-2 mt-4">
                                @foreach($allImages as $index => $imageUrl)
                                    <button onclick="scrollToImage({{ $index }})"
                                            class="gallery-indicator h-1.5 rounded-full transition-all duration-300 {{ $index === 0 ? 'bg-olive w-8' : 'bg-gray-300 w-1.5' }}"
                                            data-index="{{ $index }}">
                                    </button>
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <!-- Miniatures Desktop -->
                    @if($allImages->count() > 1)
                        <div id="thumbnailsContainer" class="hidden lg:flex flex-col gap-3 w-24 xl:w-28">
                            @foreach($allImages as $index => $imageUrl)
                                <button class="thumbnail bg-gray-100 overflow-hidden aspect-square cursor-pointer rounded-xl border-2 transition-all duration-300 {{ $index === 0 ? 'border-olive ring-2 ring-olive/20' : 'border-gray-200 hover:border-olive/50' }}"
                                     onclick="changeImage('{{ $imageUrl }}', this)">
                                    <img src="{{ $imageUrl }}"
                                         alt="Vue {{ $plante->nom_commun }}"
                                         loading="lazy"
                                         class="w-full h-full object-cover">
                                </button>
                            @endforeach
                        </div>
                    @endif

                    <!-- Image principale Desktop -->
                    <div class="hidden lg:block lg:flex-1">
                        <div class="bg-gray-100 overflow-hidden rounded-2xl aspect-square">
                            <img id="mainImage"
                                 src="{{ $plante->photo_principale_url ?? asset('images/placeholder-plante.jpg') }}"
                                 alt="{{ $plante->nom_commun }}"
                                 class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>

                <!-- Informations produit (droite) -->
                <div class="flex flex-col space-y-8">
                    <!-- Badge catégorie -->
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-olive/10 border border-olive/20 rounded-full text-sm font-semibold text-olive w-fit">
                        <span>{{ $plante->categorie->nom }}</span>
                    </div>

                    <!-- Nom de la plante -->
                    <div class="space-y-3">
                        <h1 class="font-bold text-gray-900 leading-tight text-3xl sm:text-4xl lg:text-5xl xl:text-6xl">
                            {{ $plante->nom_commun }}
                        </h1>

                        <!-- Nom scientifique -->
                        <p class="text-lg sm:text-xl italic text-gray-500 font-light">
                            {{ $plante->nom_scientifique }}
                        </p>
                    </div>

                    <!-- Prix -->
                    <div class="flex items-baseline gap-3">
                        <span class="font-bold text-gray-900 text-4xl sm:text-5xl">
                            {{ number_format($plante->prix, 2, ',', ' ') }} €
                        </span>
                        @if($plante->stock > 0)
                            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-green-100 text-green-700 rounded-full text-sm font-medium">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                En stock
                            </span>
                        @endif
                    </div>

                    <!-- Description -->
                    <div class="prose prose-gray max-w-none">
                        <p class="text-gray-700 leading-relaxed text-base sm:text-lg">
                            {{ $plante->description }}
                        </p>
                    </div>

                    <!-- Caractéristiques modernes -->
                    <div class="bg-white border border-gray-200 rounded-2xl p-6 sm:p-8 space-y-6">
                        <h3 class="text-xl font-bold text-gray-900">
                            Caractéristiques
                        </h3>
                        <div class="grid grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <div class="flex items-center gap-2 text-gray-500 text-sm">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                    </svg>
                                    <span>Ensoleillement</span>
                                </div>
                                <p class="font-semibold text-gray-900 text-base">{{ ucfirst($plante->exposition) }}</p>
                            </div>
                            <div class="space-y-2">
                                <div class="flex items-center gap-2 text-gray-500 text-sm">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>
                                    </svg>
                                    <span>Taille</span>
                                </div>
                                <p class="font-semibold text-gray-900 text-base">{{ ucfirst($plante->taille) }}</p>
                            </div>
                            <div class="space-y-2">
                                <div class="flex items-center gap-2 text-gray-500 text-sm">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                    </svg>
                                    <span>Arrosage</span>
                                </div>
                                <p class="font-semibold text-gray-900 text-base">{{ ucfirst($plante->arrosage) }}</p>
                            </div>
                            <div class="space-y-2">
                                <div class="flex items-center gap-2 text-gray-500 text-sm">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                    </svg>
                                    <span>Disponibilité</span>
                                </div>
                                <p class="font-semibold text-gray-900 text-base">{{ $plante->stock > 0 ? 'En stock' : 'Sur demande' }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- CTA -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <a href="tel:0696805974" class="flex-1 inline-flex items-center justify-center gap-2 px-8 py-4 bg-olive text-white font-semibold rounded-full hover:bg-green-800 transition-all duration-300 shadow-lg shadow-olive/30 hover:shadow-xl">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span>Appeler maintenant</span>
                        </a>
                        <a href="{{ route('contact') }}" class="flex-1 inline-flex items-center justify-center gap-2 px-8 py-4 bg-white text-olive font-semibold rounded-full border-2 border-olive hover:bg-olive hover:text-white transition-all duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span>Nous contacter</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Section Conseils d'Entretien et Heures d'Ouverture - Accordéons -->
            <div class="space-y-4 mb-16 lg:mb-24">

                <!-- Accordéon Conseils d'Entretien -->
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden">
                    <button onclick="toggleAccordion('conseils')"
                            class="w-full flex items-center justify-between p-6 sm:p-8 hover:bg-gray-50 transition-colors duration-300">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-olive/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-olive" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl sm:text-2xl font-bold text-gray-900">
                                Conseils d'entretien
                            </h3>
                        </div>
                        <svg id="chevron-conseils" class="w-6 h-6 text-olive transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <div id="content-conseils" class="accordion-content">
                        <div class="px-6 sm:px-8 pb-6 sm:pb-8 space-y-6">
                            <div class="space-y-5">
                                <!-- Arrosage -->
                                <div class="flex gap-4">
                                    <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center flex-shrink-0 shadow-sm">
                                        <svg class="w-5 h-5 text-olive" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-900 mb-1 text-base">Arrosage</h4>
                                        <p class="text-gray-700 text-sm leading-relaxed">
                                            Fréquence {{ strtolower($plante->arrosage) }}. Laissez le substrat sécher entre deux arrosages pour éviter la pourriture des racines.
                                        </p>
                                    </div>
                                </div>

                                <!-- Exposition -->
                                <div class="flex gap-4">
                                    <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center flex-shrink-0 shadow-sm">
                                        <svg class="w-5 h-5 text-olive" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-900 mb-1 text-base">Exposition lumineuse</h4>
                                        <p class="text-gray-700 text-sm leading-relaxed">
                                            Cette plante préfère une exposition {{ strtolower($plante->exposition) }}. Évitez les changements brusques de luminosité.
                                        </p>
                                    </div>
                                </div>

                                <!-- Température -->
                                <div class="flex gap-4">
                                    <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center flex-shrink-0 shadow-sm">
                                        <svg class="w-5 h-5 text-olive" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-900 mb-1 text-base">Température</h4>
                                        <p class="text-gray-700 text-sm leading-relaxed">
                                            Température idéale entre 15°C et 30°C. Protégez la plante du froid et des courants d'air.
                                        </p>
                                    </div>
                                </div>

                                <!-- Rempotage -->
                                <div class="flex gap-4">
                                    <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center flex-shrink-0 shadow-sm">
                                        <svg class="w-5 h-5 text-olive" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-900 mb-1 text-base">Rempotage</h4>
                                        <p class="text-gray-700 text-sm leading-relaxed">
                                            Rempotez tous les 2-3 ans au printemps dans un terreau drainant adapté aux plantes grasses.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="p-4 bg-yellow/10 border border-yellow/30 rounded-xl">
                                <p class="text-sm text-gray-700 flex items-start gap-2">
                                    <svg class="w-5 h-5 text-yellow-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span><strong>Conseil :</strong> N'hésitez pas à nous contacter pour des conseils personnalisés sur l'entretien de votre plante.</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Accordéon Heures d'Ouverture -->
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden">
                    <button onclick="toggleAccordion('heures')"
                            class="w-full flex items-center justify-between p-6 sm:p-8 hover:bg-gray-50 transition-colors duration-300">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-olive/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-olive" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl sm:text-2xl font-bold text-gray-900">
                                Horaires et adresse
                            </h3>
                        </div>
                        <svg id="chevron-heures" class="w-6 h-6 text-olive transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <div id="content-heures" class="accordion-content">
                        <div class="px-6 sm:px-8 pb-6 sm:pb-8 space-y-6">
                            <div class="space-y-4">
                                <p class="text-gray-700 leading-relaxed">
                                    Découvrez cette plante et toute notre collection directement à la pépinière.
                                </p>

                                <!-- Horaires -->
                                <div class="bg-gray-50 rounded-xl p-5 space-y-3">
                                    <h4 class="font-semibold text-gray-900 text-base mb-3">Horaires d'ouverture</h4>
                                    <div class="space-y-2.5">
                                        <div class="flex justify-between items-center">
                                            <span class="text-gray-700 font-medium">Lundi - Vendredi</span>
                                            <span class="text-olive font-semibold">9h00 - 12h00</span>
                                        </div>
                                        <div class="h-px bg-gray-200"></div>
                                        <div class="flex justify-between items-center">
                                            <span class="text-gray-700 font-medium">Samedi</span>
                                            <span class="text-olive font-semibold">9h00 - 12h00</span>
                                        </div>
                                        <div class="h-px bg-gray-200"></div>
                                        <div class="flex justify-between items-center">
                                            <span class="text-gray-700 font-medium">Dimanche</span>
                                            <span class="text-red-500 font-semibold">Fermé</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Adresse -->
                                <div class="flex gap-4 p-4 bg-olive/5 rounded-xl border border-olive/20">
                                    <div class="w-10 h-10 bg-olive rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-900 mb-1">Notre adresse</h4>
                                        <p class="text-gray-700 text-sm">
                                            Chemin Petite Rivière<br>
                                            Rond point de Pelletier<br>
                                            97232 Le Lamentin
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="p-4 bg-blue-50 border border-blue-200 rounded-xl">
                                <p class="text-sm text-gray-700 flex items-start gap-2">
                                    <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span><strong>Astuce :</strong> Appelez-nous avant votre visite pour vérifier la disponibilité de cette plante en pépinière.</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section "Vous aimeriez aussi" moderne -->
            <div class="pt-16 lg:pt-24">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-8 sm:mb-12">
                    Vous aimeriez aussi
                </h2>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 sm:gap-8">
                    @foreach($plantesLiees as $planteLiee)
                        <a href="{{ route('plantes.show', $planteLiee) }}" class="group block bg-white rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-500 border border-gray-100">
                            <!-- Image produit -->
                            <div class="relative aspect-square overflow-hidden bg-gray-50">
                                <img src="{{ $planteLiee->photo_principale_url ?? asset('images/placeholder-plante.jpg') }}"
                                     alt="{{ $planteLiee->nom_commun }}"
                                     loading="lazy"
                                     class="w-full h-full object-cover">

                                <!-- Badge catégorie en overlay -->
                                <div class="absolute top-3 right-3 px-3 py-1.5 bg-white/90 backdrop-blur-sm rounded-full text-xs font-semibold text-olive border border-olive/20">
                                    {{ $planteLiee->categorie->nom }}
                                </div>
                            </div>

                            <!-- Informations produit -->
                            <div class="p-4 sm:p-5 space-y-2 sm:space-y-3">
                                <!-- Nom du produit -->
                                <h3 class="text-base sm:text-lg font-bold text-gray-900 leading-tight line-clamp-2">
                                    {{ $planteLiee->nom_commun }}
                                </h3>

                                <!-- Prix et CTA -->
                                <div class="flex items-center justify-between">
                                    <p class="text-lg sm:text-xl font-bold text-gray-900">
                                        {{ number_format($planteLiee->prix, 2, ',', ' ') }} €
                                    </p>
                                    <div class="flex items-center text-gray-500 group-hover:text-olive transition-colors duration-300">
                                        <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>

        </div>
    </main>

    <!-- Script JavaScript moderne -->
    <script>
        // Gestion de la galerie d'images Desktop
        function changeImage(imageUrl, thumbnail) {
            const mainImage = document.getElementById('mainImage');
            mainImage.src = imageUrl;

            // Mettre à jour les classes des miniatures
            document.querySelectorAll('.thumbnail').forEach(thumb => {
                thumb.classList.remove('border-olive', 'ring-2', 'ring-olive/20');
                thumb.classList.add('border-gray-200');
            });

            thumbnail.classList.remove('border-gray-200');
            thumbnail.classList.add('border-olive', 'ring-2', 'ring-olive/20');
        }

        // Gestion de la galerie Mobile
        function scrollToImage(index) {
            const gallery = document.getElementById('mobileGallery');
            const imageWidth = gallery.offsetWidth;
            gallery.scrollTo({
                left: imageWidth * index,
                behavior: 'smooth'
            });
        }

        // Mettre à jour les indicateurs lors du scroll
        const mobileGallery = document.getElementById('mobileGallery');
        if (mobileGallery) {
            mobileGallery.addEventListener('scroll', function() {
                const imageWidth = this.offsetWidth;
                const currentIndex = Math.round(this.scrollLeft / imageWidth);

                document.querySelectorAll('.gallery-indicator').forEach((indicator, index) => {
                    if (index === currentIndex) {
                        indicator.classList.remove('bg-gray-300', 'w-1.5');
                        indicator.classList.add('bg-olive', 'w-8');
                    } else {
                        indicator.classList.remove('bg-olive', 'w-8');
                        indicator.classList.add('bg-gray-300', 'w-1.5');
                    }
                });
            });
        }

        // Gestion des accordéons - un seul ouvert à la fois
        function toggleAccordion(id) {
            const content = document.getElementById(`content-${id}`);
            const chevron = document.getElementById(`chevron-${id}`);

            // Liste de tous les accordéons
            const allAccordions = ['conseils', 'heures'];

            // Si l'accordéon cliqué est déjà ouvert, on le ferme
            if (content.classList.contains('open')) {
                content.classList.remove('open');
                chevron.style.transform = 'rotate(0deg)';
            } else {
                // Fermer tous les autres accordéons
                allAccordions.forEach(accordionId => {
                    const otherContent = document.getElementById(`content-${accordionId}`);
                    const otherChevron = document.getElementById(`chevron-${accordionId}`);

                    if (otherContent && otherChevron) {
                        otherContent.classList.remove('open');
                        otherChevron.style.transform = 'rotate(0deg)';
                    }
                });

                // Ouvrir l'accordéon cliqué
                content.classList.add('open');
                chevron.style.transform = 'rotate(180deg)';
            }
        }
    </script>
@endsection

@section('styles')
<style>
    /* Cacher la scrollbar pour le carousel mobile */
    #mobileGallery::-webkit-scrollbar {
        display: none;
    }

    #mobileGallery {
        scrollbar-width: none;
        -ms-overflow-style: none;
    }

    /* Animations d'apparition */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    main > div {
        animation: fadeInUp 0.6s ease-out;
    }

    /* Smooth scroll */
    html {
        scroll-behavior: smooth;
    }

    /* Styles pour les accordéons */
    .accordion-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease-out;
    }

    .accordion-content.open {
        max-height: 2000px;
        transition: max-height 0.5s ease-in;
    }
</style>
@endsection
