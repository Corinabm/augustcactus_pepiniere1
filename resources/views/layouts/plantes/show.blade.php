@extends('layouts.app')

@section('title', $plante->nom_commun . ' - Fiche Produit')

@push('styles')
<style>
    /* Cacher la scrollbar */
    #mobileGallery::-webkit-scrollbar {
        display: none;
    }
</style>
@endpush

@section('content')
    <!-- Espacement pour la navbar fixe -->
    <div class="pt-20 md:pt-24"></div>

    <main class="bg-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 md:py-8 lg:py-12">

            <!-- Fil d'Ariane -->
            <nav class="mb-6 md:mb-8 text-xs md:text-sm overflow-x-auto whitespace-nowrap" style="font-family: 'Source Sans Pro', sans-serif;">
                <a href="{{ route('index') }}" class="text-gray-500 hover:text-black">Accueil</a>
                <span class="mx-1.5 md:mx-2 text-gray-400">/</span>
                <a href="{{ route('plantes.catalogue') }}" class="text-gray-500 hover:text-black">Nos plantes</a>
                <span class="mx-1.5 md:mx-2 text-gray-400">/</span>
                <a href="{{ route('plantes.catalogue') }}?categorie={{ strtolower($plante->categorie->nom) }}" class="text-gray-500 hover:text-black">{{ $plante->categorie->nom }}</a>
                <span class="mx-1.5 md:mx-2 text-gray-400">/</span>
                <span class="text-black">{{ $plante->nom_commun }}</span>
            </nav>

            <!-- Section Hero / Produit Principal -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 mb-12 lg:mb-16">

                <!-- Galerie d'images (gauche) -->
                <div class="flex flex-col lg:flex-row gap-3 lg:gap-4 h-auto lg:h-full">
                    @php
                        $allImages = collect([$plante->photo_principale_url])
                            ->concat($plante->photos->pluck('url'))
                            ->filter()
                            ->unique()
                            ->values();
                    @endphp

                    <!-- Galerie mobile (carousel avec swipe) - visible uniquement sur mobile -->
                    <div class="lg:hidden relative">
                        <!-- Wrapper pour cacher complètement la scrollbar -->
                        <div class="overflow-hidden">
                            <div id="mobileGallery" class="flex overflow-x-auto snap-x snap-mandatory -mb-4 pb-4" style="scroll-behavior: smooth; scrollbar-width: none; -ms-overflow-style: none;">
                                @foreach($allImages as $index => $imageUrl)
                                    <div class="flex-shrink-0 w-full snap-center">
                                        <div class="relative bg-[#FAFAFA] overflow-hidden aspect-[4/5]">
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
                            <!-- Indicateurs de pagination -->
                            <div class="flex justify-center gap-2 mt-3">
                                @foreach($allImages as $index => $imageUrl)
                                    <button onclick="scrollToImage({{ $index }})"
                                            class="gallery-indicator w-2 h-2 rounded-full transition {{ $index === 0 ? 'bg-black' : 'bg-gray-300' }}"
                                            data-index="{{ $index }}">
                                    </button>
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <!-- Image principale Desktop - visible uniquement sur grand écran -->
                    <div class="hidden lg:block flex-1 order-1 lg:order-2">
                        <div class="relative bg-[#FAFAFA] overflow-hidden aspect-[4/5]">
                            <img id="mainImage"
                                 src="{{ $plante->photo_principale_url ?? asset('images/placeholder-plante.jpg') }}"
                                 alt="{{ $plante->nom_commun }}"
                                 class="w-full h-full object-cover">
                        </div>
                    </div>

                    <!-- Miniatures Desktop - visible uniquement sur grand écran -->
                    @if($allImages->count() > 1)
                        <div id="thumbnailsContainer" class="hidden lg:flex flex-col gap-3 w-20 xl:w-24 overflow-y-auto order-2 lg:order-1">
                            @foreach($allImages as $index => $imageUrl)
                                <div class="thumbnail bg-[#FAFAFA] overflow-hidden aspect-square cursor-pointer hover:border-2 hover:border-gray-400 transition {{ $index === 0 ? 'border border-black' : 'border border-gray-200' }}"
                                     onclick="changeImage('{{ $imageUrl }}', this)">
                                    <img src="{{ $imageUrl }}"
                                         alt="Vue {{ $plante->nom_commun }}"
                                         loading="lazy"
                                         class="w-full h-full object-cover">
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>

                <!-- Informations produit (droite) -->
                <div class="flex flex-col">
                    <!-- Informations du haut -->
                    <div class="space-y-4 lg:space-y-6">
                        <!-- Catégorie -->
                        <p class="text-sm text-[#0A2D19]" style="font-family: 'Source Sans Pro', sans-serif;">
                            {{ $plante->categorie->nom }}
                        </p>

                        <!-- Nom de la plante -->
                        <h1 class="font-bold text-black leading-tight text-3xl md:text-4xl lg:text-5xl" style="font-family: 'Playfair Display', serif;">
                            {{ $plante->nom_commun }}
                        </h1>

                        <!-- Nom scientifique -->
                        <p class="text-base md:text-lg italic text-gray-500" style="font-family: 'Source Sans Pro', sans-serif;">
                            {{ $plante->nom_scientifique }}
                        </p>

                        <!-- Prix -->
                        <div class="py-4 lg:py-6 mb-6">
                            <span class="font-semibold text-black text-2xl md:text-3xl" style="font-family: 'Source Sans Pro', sans-serif;">
                                {{ number_format($plante->prix, 2, ',', ' ') }} €
                            </span>
                        </div>

                        <!-- Description courte -->
                        <div class="mb-6">
                            <p class="text-gray-700 leading-relaxed text-sm md:text-base" style="font-family: 'Source Sans Pro', sans-serif;">
                                {{ Str::limit($plante->description, 150) }}
                            </p>
                        </div>

                        <!-- Caractéristiques détaillées -->
                        <div class="bg-[#FAFAFA] rounded-lg p-4 lg:p-6">
                            <h3 class="text-base md:text-lg font-bold text-black mb-4" style="font-family: 'Playfair Display', serif;">
                                Caractéristiques
                            </h3>
                            <div class="grid grid-cols-2 gap-3 lg:gap-4" style="font-family: 'Source Sans Pro', sans-serif;">
                                <div class="space-y-1">
                                    <p class="text-xs text-gray-500">Ensoleillement</p>
                                    <p class="font-semibold text-black text-sm">{{ ucfirst($plante->exposition) }}</p>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-xs text-gray-500">Taille</p>
                                    <p class="font-semibold text-black text-sm">{{ ucfirst($plante->taille) }}</p>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-xs text-gray-500">Arrosage</p>
                                    <p class="font-semibold text-black text-sm">{{ ucfirst($plante->arrosage) }}</p>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-xs text-gray-500">Disponibilité</p>
                                    <p class="font-semibold text-black text-sm">{{ $plante->stock > 0 ? 'En stock' : 'Sur demande' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Onglets d'information -->
            <div class="mb-12 lg:mb-16">
                <!-- Navigation des onglets -->
                <div class="border-b border-gray-200 mb-6 lg:mb-8 overflow-x-auto">
                    <nav class="flex space-x-6 lg:space-x-8 min-w-max lg:min-w-0" style="font-family: 'Source Sans Pro', sans-serif;">
                        <button onclick="showTab('description')"
                                id="tab-description"
                                class="tab-btn pb-3 lg:pb-4 px-1 border-b-2 font-semibold text-sm whitespace-nowrap transition border-black text-black">
                            Description
                        </button>
                        <button onclick="showTab('entretien')"
                                id="tab-entretien"
                                class="tab-btn pb-3 lg:pb-4 px-1 border-b-2 font-semibold text-sm whitespace-nowrap transition border-transparent text-gray-500 hover:text-black">
                            Entretien
                        </button>
                        <button onclick="showTab('visite')"
                                id="tab-visite"
                                class="tab-btn pb-3 lg:pb-4 px-1 border-b-2 font-semibold text-sm whitespace-nowrap transition border-transparent text-gray-500 hover:text-black">
                            Venir nous voir
                        </button>
                    </nav>
                </div>

                <!-- Contenu des onglets -->
                <div class="prose max-w-none" style="font-family: 'Source Sans Pro', sans-serif;">
                    <!-- Description -->
                    <div id="content-description" class="tab-content space-y-4">
                        <p class="text-gray-700 leading-relaxed text-sm md:text-base">{{ $plante->description }}</p>
                    </div>

                    <!-- Entretien -->
                    <div id="content-entretien" class="tab-content space-y-4" style="display: none;">
                        <h3 class="text-base md:text-lg font-bold text-black" style="font-family: 'Playfair Display', serif;">Guide d'entretien</h3>
                        <div class="space-y-3">
                            <div>
                                <h4 class="font-semibold text-black text-sm md:text-base">💧 Arrosage</h4>
                                <p class="text-gray-700 text-sm md:text-base">{{ ucfirst($plante->arrosage) }}</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-black text-sm md:text-base">🌞 Exposition</h4>
                                <p class="text-gray-700 text-sm md:text-base">Cette plante nécessite une exposition {{ strtolower($plante->exposition) }}.</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-black text-sm md:text-base">🌱 Taille</h4>
                                <p class="text-gray-700 text-sm md:text-base">Taille adulte : {{ strtolower($plante->taille) }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Venir nous voir -->
                    <div id="content-visite" class="tab-content space-y-4" style="display: none;">
                        <h3 class="text-base md:text-lg font-bold text-black" style="font-family: 'Playfair Display', serif;">Venir nous voir</h3>
                        <p class="text-gray-700 text-sm md:text-base">Venez découvrir cette plante et toute notre collection directement à la pépinière.</p>

                        <div class="bg-[#FAFAFA] rounded-lg p-4 space-y-3">
                            <div>
                                <h4 class="font-semibold text-black text-sm md:text-base mb-2">📍 Adresse</h4>
                                <p class="text-gray-700 text-sm md:text-base">Chemin Petite Rivière, Rond point de Pelletier<br>97232 Le Lamentin</p>
                            </div>

                            <div>
                                <h4 class="font-semibold text-black text-sm md:text-base mb-2">🕒 Horaires d'ouverture</h4>
                                <p class="text-gray-700 text-sm md:text-base">
                                    <strong>Lundi - Vendredi :</strong> 9h00 - 12h00<br>
                                    <strong>Samedi :</strong> 9h00 - 12h00<br>
                                    <strong>Dimanche :</strong> Fermé
                                </p>
                            </div>

                        <p class="text-sm text-gray-600 italic">💡 Conseil : Appelez-nous avant votre visite pour vérifier la disponibilité de cette plante.</p>
                    </div>
                </div>
            </div>

            <!-- Section "Vous aimeriez aussi" -->
            <div class="pt-12 lg:pt-16">
                <h2 class="text-2xl md:text-3xl font-bold text-black mb-6 lg:mb-8" style="font-family: 'Playfair Display', serif;">
                    Vous aimeriez aussi
                </h2>
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6">
                    @foreach($plantesLiees as $planteLiee)
                        <a href="{{ route('plantes.show', $planteLiee) }}" class="block bg-[#FAFAFA] overflow-hidden">
                            <div class="aspect-square overflow-hidden">
                                <img src="{{ $planteLiee->photo_principale_url ?? asset('images/placeholder-plante.jpg') }}"
                                     alt="{{ $planteLiee->nom_commun }}"
                                     loading="lazy"
                                     class="w-full h-full object-cover">
                            </div>
                            <div class="p-3 lg:p-4 space-y-1 lg:space-y-2">
                                <p class="text-xs text-gray-500" style="font-family: 'Source Sans Pro', sans-serif;">
                                    {{ $planteLiee->categorie->nom }}
                                </p>
                                <h3 class="text-sm md:text-base lg:text-lg font-normal text-black line-clamp-2" style="font-family: 'Playfair Display', serif;">
                                    {{ $planteLiee->nom_commun }}
                                </h3>
                                <p class="text-base md:text-lg font-semibold text-black" style="font-family: 'Source Sans Pro', sans-serif;">
                                    {{ number_format($planteLiee->prix, 2, ',', ' ') }} €
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>

        </div>
    </main>

    <!-- Badge flottant Call-to-Action -->
    <a href="tel:0696805974"
       class="fixed bottom-6 right-6 bg-[#0A2D19] text-white px-6 py-4 rounded-full shadow-2xl flex items-center gap-2 hover:bg-[#0A2D19]/90 transition z-50"
       style="font-family: 'Source Sans Pro', sans-serif;">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
        </svg>
        <span class="font-bold">Appeler</span>
    </a>

    <!-- Script JavaScript pur -->
    <script>
        // Gestion de la galerie d'images Desktop
        function changeImage(imageUrl, thumbnail) {
            // Changer l'image principale
            document.getElementById('mainImage').src = imageUrl;

            // Retirer la classe active de toutes les miniatures
            document.querySelectorAll('.thumbnail').forEach(thumb => {
                thumb.classList.remove('border-black');
                thumb.classList.add('border-gray-200');
            });

            // Ajouter la classe active à la miniature cliquée
            thumbnail.classList.add('border-black');
            thumbnail.classList.remove('border-gray-200');
        }

        // Gestion de la galerie Mobile (carousel)
        function scrollToImage(index) {
            const gallery = document.getElementById('mobileGallery');
            const imageWidth = gallery.offsetWidth;
            gallery.scrollTo({
                left: imageWidth * index,
                behavior: 'smooth'
            });
        }

        // Mettre à jour les indicateurs lors du scroll manuel
        const mobileGallery = document.getElementById('mobileGallery');
        if (mobileGallery) {
            mobileGallery.addEventListener('scroll', function() {
                const imageWidth = this.offsetWidth;
                const currentIndex = Math.round(this.scrollLeft / imageWidth);

                // Mettre à jour les indicateurs
                document.querySelectorAll('.gallery-indicator').forEach((indicator, index) => {
                    if (index === currentIndex) {
                        indicator.classList.remove('bg-gray-300');
                        indicator.classList.add('bg-black');
                    } else {
                        indicator.classList.remove('bg-black');
                        indicator.classList.add('bg-gray-300');
                    }
                });
            });
        }

        // Gestion des onglets
        function showTab(tabName) {
            // Cacher tous les contenus d'onglets
            document.querySelectorAll('.tab-content').forEach(content => {
                content.style.display = 'none';
            });

            // Retirer la classe active de tous les boutons d'onglets
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('border-black', 'text-black');
                btn.classList.add('border-transparent', 'text-gray-500');
            });

            // Afficher le contenu de l'onglet sélectionné
            document.getElementById('content-' + tabName).style.display = 'block';

            // Ajouter la classe active au bouton d'onglet sélectionné
            const selectedBtn = document.getElementById('tab-' + tabName);
            selectedBtn.classList.add('border-black', 'text-black');
            selectedBtn.classList.remove('border-transparent', 'text-gray-500');
        }
    </script>
@endsection
