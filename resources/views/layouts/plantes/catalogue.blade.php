@extends('layouts.app')

@section('title', $titre . ' - August Cactus')

@section('content')
    <!-- Espacement pour la navbar fixe -->
    <div class="pt-16 sm:pt-20"></div>

    <main class="bg-gradient-to-b from-white to-gray-50 min-h-screen">
        <!-- Hero Section avec filtres -->
        <section class="bg-white border-b border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 md:py-20">
                <!-- En-tête moderne -->
                <div class="max-w-4xl mb-10 sm:mb-12">
                    <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-olive mb-4 sm:mb-6 leading-tight">
                        {{ $titre }}
                    </h1>
                    <p class="text-lg sm:text-xl text-gray-600 font-light leading-relaxed">
                        {{ $sousTitre }}
                    </p>
                </div>

                <!-- Filtres par catégorie - Pills modernes -->
                <div class="flex flex-wrap gap-3 sm:gap-4">
                    <a href="{{ route('plantes.catalogue') }}"
                       class="group inline-flex items-center px-5 sm:px-6 py-2.5 sm:py-3 rounded-full font-medium transition-all duration-300 {{ !request('categorie') ? 'bg-olive text-white shadow-lg shadow-olive/30' : 'bg-white text-gray-700 border-2 border-gray-200 hover:border-olive hover:text-olive' }}">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                        </svg>
                        <span class="text-sm sm:text-base">Toutes</span>
                    </a>

                    <a href="{{ route('plantes.catalogue', ['categorie' => 'cactus']) }}"
                       class="group inline-flex items-center px-5 sm:px-6 py-2.5 sm:py-3 rounded-full font-medium transition-all duration-300 {{ request('categorie') == 'cactus' ? 'bg-olive text-white shadow-lg shadow-olive/30' : 'bg-white text-gray-700 border-2 border-gray-200 hover:border-olive hover:text-olive' }}">
                        <span class="text-xl sm:text-2xl mr-2">🌵</span>
                        <span class="text-sm sm:text-base">Cactus</span>
                    </a>

                    <a href="{{ route('plantes.catalogue', ['categorie' => 'succulentes']) }}"
                       class="group inline-flex items-center px-5 sm:px-6 py-2.5 sm:py-3 rounded-full font-medium transition-all duration-300 {{ request('categorie') == 'succulentes' ? 'bg-olive text-white shadow-lg shadow-olive/30' : 'bg-white text-gray-700 border-2 border-gray-200 hover:border-olive hover:text-olive' }}">
                        <span class="text-xl sm:text-2xl mr-2">🪴</span>
                        <span class="text-sm sm:text-base">Succulentes</span>
                    </a>

                    <a href="{{ route('plantes.catalogue', ['categorie' => 'diverses']) }}"
                       class="group inline-flex items-center px-5 sm:px-6 py-2.5 sm:py-3 rounded-full font-medium transition-all duration-300 {{ request('categorie') == 'diverses' ? 'bg-olive text-white shadow-lg shadow-olive/30' : 'bg-white text-gray-700 border-2 border-gray-200 hover:border-olive hover:text-olive' }}">
                        <span class="text-xl sm:text-2xl mr-2">🌿</span>
                        <span class="text-sm sm:text-base">Plantes Diverses</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Grille des plantes -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 md:py-20">
            @if ($plantes->isEmpty())
                <!-- État vide élégant -->
                <div class="text-center py-20 sm:py-32">
                    <div class="inline-flex items-center justify-center w-20 h-20 sm:w-24 sm:h-24 bg-gray-100 rounded-full mb-6">
                        <svg class="w-10 h-10 sm:w-12 sm:h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-3">Aucune plante disponible</h3>
                    <p class="text-base sm:text-lg text-gray-600 mb-8">Revenez bientôt pour découvrir nos nouvelles plantes</p>
                    <a href="{{ route('plantes.catalogue') }}" class="inline-flex items-center px-6 py-3 bg-olive text-white font-semibold rounded-full hover:bg-green-800 transition-all duration-300">
                        Voir toutes les plantes
                    </a>
                </div>
            @else
                <!-- Grille moderne responsive -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 sm:gap-8">
                    @foreach ($plantes as $plante)
                        <a href="{{ route('plantes.show', $plante) }}" class="group block bg-white rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-500 border border-gray-100">
                            <!-- Image produit -->
                            <div class="relative aspect-square overflow-hidden bg-gray-50">
                                <img src="{{ $plante->photo_principale_url ?? asset('images/placeholder-plante.jpg') }}"
                                     alt="{{ $plante->nom_commun }}"
                                     loading="lazy"
                                     class="w-full h-full object-cover">

                                <!-- Badge catégorie en overlay -->
                                <div class="absolute top-3 right-3 px-3 py-1.5 bg-white/90 backdrop-blur-sm rounded-full text-xs font-semibold text-olive border border-olive/20">
                                    {{ $plante->categorie->nom }}
                                </div>
                            </div>

                            <!-- Informations produit -->
                            <div class="p-5 sm:p-6 space-y-3">
                                <!-- Nom du produit -->
                                <h3 class="text-lg sm:text-xl font-bold text-gray-900 leading-tight group-hover:text-olive transition-colors duration-300">
                                    {{ $plante->nom_commun }}
                                </h3>

                                <!-- Prix et CTA -->
                                <div class="flex items-center justify-between">
                                    <p class="text-xl sm:text-2xl font-bold text-olive">
                                        {{ number_format($plante->prix, 2, ',', ' ') }} €
                                    </p>
                                    <div class="flex items-center text-gray-500 group-hover:text-olive transition-colors duration-300">
                                        <span class="text-sm font-medium mr-1">Voir</span>
                                        <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>

                <!-- Pagination moderne -->
                @if ($plantes->hasPages())
                    <div class="mt-16 sm:mt-20">
                        {{ $plantes->appends(['categorie' => request('categorie')])->links() }}
                    </div>
                @endif
            @endif
        </section>
    </main>
@endsection

@section('styles')
<style>
    /* Animation fade-in pour les cards */
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

    .grid > a {
        animation: fadeInUp 0.6s ease-out forwards;
    }

    .grid > a:nth-child(1) { animation-delay: 0.05s; }
    .grid > a:nth-child(2) { animation-delay: 0.1s; }
    .grid > a:nth-child(3) { animation-delay: 0.15s; }
    .grid > a:nth-child(4) { animation-delay: 0.2s; }
    .grid > a:nth-child(5) { animation-delay: 0.25s; }
    .grid > a:nth-child(6) { animation-delay: 0.3s; }
    .grid > a:nth-child(7) { animation-delay: 0.35s; }
    .grid > a:nth-child(8) { animation-delay: 0.4s; }

    /* Smooth scroll */
    html {
        scroll-behavior: smooth;
    }
</style>
@endsection
