@extends('layouts.app')

@section('title', 'Nos Plantes - Catalogue')

@section('content')
    <!-- Espacement pour la navbar fixe -->
    <div class="pt-24"></div>

    <main class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-olive mb-8">Notre Catalogue Végétal</h1>

        <div class="flex flex-col lg:flex-row gap-8">
            <aside class="lg:w-1/4 p-4 bg-gray-50 rounded-lg shadow-md h-fit sticky top-24">
                <h2 class="text-2xl font-bold text-olive mb-4 border-b pb-2">Filtrer</h2>

                <form action="{{ route('plantes.catalogue') }}" method="GET" class="space-y-6">
                    <div class="space-y-2">
                        <label for="exposition" class="font-bold text-olive">Exposition</label>
                        <select name="exposition" id="exposition" class="w-full border-gray-300 rounded-md shadow-sm focus:border-yellow focus:ring-yellow">
                            <option value="">Toutes</option>
                            <option value="soleil" {{ request('exposition') == 'soleil' ? 'selected' : '' }}>Plein Soleil</option>
                            <option value="mi-ombre" {{ request('exposition') == 'mi-ombre' ? 'selected' : '' }}>Mi-Ombre</option>
                            <option value="ombre" {{ request('exposition') == 'ombre' ? 'selected' : '' }}>Ombre</option>
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label for="arrosage" class="font-bold text-olive">Arrosage</label>
                        <select name="arrosage" id="arrosage" class="w-full border-gray-300 rounded-md shadow-sm focus:border-yellow focus:ring-yellow">
                            <option value="">Tous</option>
                            <option value="faible" {{ request('arrosage') == 'faible' ? 'selected' : '' }}>Faible</option>
                            <option value="modere" {{ request('arrosage') == 'modere' ? 'selected' : '' }}>Modéré</option>
                            <option value="regulier" {{ request('arrosage') == 'regulier' ? 'selected' : '' }}>Régulier</option>
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label for="prix" class="font-bold text-olive">Trier par Prix</label>
                        <select name="prix" id="prix" class="w-full border-gray-300 rounded-md shadow-sm focus:border-yellow focus:ring-yellow">
                            <option value="">Pertinence</option>
                            <option value="asc" {{ request('prix') == 'asc' ? 'selected' : '' }}>Prix Croissant</option>
                            <option value="desc" {{ request('prix') == 'desc' ? 'selected' : '' }}>Prix Décroissant</option>
                        </select>
                    </div>

                    <button type="submit" class="w-full py-2 bg-yellow text-olive font-bold rounded-md hover:bg-yellow/90 transition duration-150">
                        Appliquer les filtres
                    </button>

                    @if (request()->hasAny(['exposition', 'arrosage', 'prix']))
                        <a href="{{ route('plantes.catalogue') }}" class="block text-center text-sm text-gray-500 hover:text-olive mt-2">Réinitialiser les filtres</a>
                    @endif
                </form>
            </aside>

            <section class="lg:w-3/4">
                @if ($plantes->isEmpty())
                    <p class="text-xl text-gray-600 p-8 bg-white rounded-lg shadow-md">
                        Aucune plante ne correspond à vos critères de recherche. Essayez de réinitialiser les filtres.
                    </p>
                @else
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($plantes as $plante)
                            <a href="{{ route('plantes.show', $plante) }}" class="block bg-white rounded-xl shadow-lg overflow-hidden transition duration-300 hover:shadow-xl transform hover:-translate-y-1 group">
                                <div class="relative h-64 overflow-hidden">
                                    {{-- Affichage de la photo principale, utilise l'accesseur du modèle --}}
                                    <img src="{{ $plante->photo_principale_url ?? asset('images/placeholder-plante.jpg') }}"
                                         alt="{{ $plante->nom_commun }}"
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <div class="p-4">
                                    <span class="text-sm text-gray-500">{{ $plante->categorie->nom }}</span>
                                    <h3 class="text-2xl font-bold text-olive mt-1 truncate">{{ $plante->nom_commun }}</h3>
                                    <p class="text-lg font-bold text-yellow mt-2">{{ number_format($plante->prix, 2, ',', ' ') }} €</p>
                                    <div class="mt-4 flex justify-between items-center text-sm">
                                        <span class="text-gray-600 flex items-center">
                                            🌞 {{ ucfirst($plante->exposition) }}
                                        </span>
                                        <span class="text-gray-600 flex items-center">
                                            💧 {{ ucfirst($plante->arrosage) }}
                                        </span>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    
                    {{-- Pagination Tailwind --}}
                    <div class="mt-8">
                        {{ $plantes->links() }}
                    </div>
                @endif
            </section>
        </div>
    </main>
@endsection
