@extends('layouts.app')

@section('title', $titre . ' - August Cactus')

@section('content')
    <!-- Espacement pour la navbar fixe -->
    <div class="pt-24"></div>

    <main class="bg-white min-h-screen">
        <!-- Conteneur avec marges latérales généreuses -->
        <div class="max-w-7xl mx-auto px-8 md:px-12 lg:px-16 pt-20 pb-12">

            <!-- En-tête de la page -->
            <div class="mb-16 text-center">
                <div class="max-w-2xl mx-auto">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-black mb-6" style="font-family: 'Playfair Display', serif;">
                        {{ $titre }}
                    </h1>
                    <p class="text-base md:text-lg text-[#242424] leading-relaxed" style="font-family: 'Source Sans Pro', sans-serif;">
                        {{ $sousTitre }}
                    </p>
                </div>
            </div>

            @if ($plantes->isEmpty())
                <p class="text-xl text-[#242424] p-12 bg-white text-center" style="font-family: 'Source Sans Pro', sans-serif;">
                    Aucune plante disponible pour le moment.
                </p>
            @else
                <!-- Grille des produits - 3 colonnes desktop -->
                <div class="grid grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12 mb-16">
                    @foreach ($plantes as $plante)
                        <a href="{{ route('plantes.show', $plante) }}" class="group block bg-[#FAFAFA] overflow-hidden">
                            <!-- Image produit -->
                            <div class="relative h-64 md:h-80 lg:h-96 overflow-hidden">
                                <img src="{{ $plante->photo_principale_url ?? asset('images/placeholder-plante.jpg') }}"
                                     alt="{{ $plante->nom_commun }}"
                                     loading="lazy"
                                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-102">
                            </div>

                            <!-- Informations produit avec espace blanc généreux -->
                            <div class="p-6 md:p-8 space-y-3">
                                <!-- Catégorie -->
                                <p class="text-medium font-serif text-olive" style="font-family: 'Source Sans Pro', sans-serif;">
                                    {{ $plante->categorie->nom }}
                                </p>

                                <!-- Nom du produit -->
                                <h3 class="text-xl md:text-2xl font-normal text-black leading-tight" style="font-family: 'Playfair Display', serif;">
                                    {{ $plante->nom_commun }}
                                </h3>

                                <!-- Prix -->
                                <p class="text-lg md:text-xl font-semibold text-black" style="font-family: 'Source Sans Pro', sans-serif;">
                                    {{ number_format($plante->prix, 2, ',', ' ') }} €
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>

                <!-- Pagination -->
                {{-- La méthode appends() ajoute le paramètre 'categorie' à tous les liens de pagination --}}
                <div class="mt-12">
                    {{ $plantes->appends(['categorie' => request('categorie')])->links() }}
                </div>
            @endif
        </div>
    </main>
@endsection
