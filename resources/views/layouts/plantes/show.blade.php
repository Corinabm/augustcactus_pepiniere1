@extends('layouts.app')

@section('title', $plante->nom_commun . ' - Fiche Produit')

@section('content')
    <!-- Espacement pour la navbar fixe -->
    <div class="pt-24"></div>

    <main class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-xl shadow-2xl p-6 lg:p-12 mt-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                <section>
                    <div class="mb-4">
                        <img src="{{ $plante->photo_principale_url ?? asset('images/placeholder-plante.jpg') }}" 
                             alt="{{ $plante->nom_commun }}" 
                             class="w-full h-96 object-cover rounded-lg shadow-xl">
                    </div>
                    
                    {{-- Affichage des photos supplémentaires (si elles existent) --}}
                    @if ($plante->photos->isNotEmpty())
                    <div class="mt-4 grid grid-cols-4 gap-2">
                        @foreach ($plante->photos as $photo)
                            <img src="{{ $photo->url }}" 
                                 alt="Photo {{ $photo->ordre }} de {{ $plante->nom_commun }}" 
                                 class="w-full h-20 object-cover rounded-md cursor-pointer hover:opacity-80 transition">
                        @endforeach
                    </div>
                    @endif
                </section>

                <section class="space-y-6">
                    <h1 class="text-4xl font-bold text-olive">{{ $plante->nom_commun }}</h1>
                    <p class="text-xl italic text-gray-500 mb-4">{{ $plante->nom_scientifique }}</p>

                    <div class="flex items-baseline justify-between border-b pb-4">
                        <span class="text-3xl font-bold text-yellow">{{ number_format($plante->prix, 2, ',', ' ') }} €</span>
                        <span class="text-lg text-gray-600 bg-gray-100 px-3 py-1 rounded-full">
                            {{ $plante->categorie->nom }}
                        </span>
                    </div>

                    <h2 class="text-2xl font-bold text-olive pt-4">Description</h2>
                    <p class="text-gray-700 leading-relaxed">{{ $plante->description }}</p>

                    <h2 class="text-2xl font-bold text-olive pt-4 border-t mt-6">Guide d'Entretien</h2>
                    <div class="grid grid-cols-3 gap-4 text-center text-sm">
                        <div class="p-3 bg-olive/5 rounded-lg">
                            <span class="text-2xl">🌱</span>
                            <p class="mt-1 font-bold text-olive">Taille</p>
                            <p class="text-gray-600">{{ ucfirst($plante->taille) }}</p>
                        </div>
                        <div class="p-3 bg-olive/5 rounded-lg">
                            <span class="text-2xl">🌞</span>
                            <p class="mt-1 font-bold text-olive">Exposition</p>
                            <p class="text-gray-600">{{ ucfirst($plante->exposition) }}</p>
                        </div>
                        <div class="p-3 bg-olive/5 rounded-lg">
                            <span class="text-2xl">💧</span>
                            <p class="mt-1 font-bold text-olive">Arrosage</p>
                            <p class="text-gray-600">{{ ucfirst($plante->arrosage) }}</p>
                        </div>
                    </div>

                    @if ($plante->stock > 0)
                        <div class="text-green-600 font-bold">En Stock ({{ $plante->stock }} unités disponibles)</div>
                        <a href="{{ route('contact') }}" class="block w-full text-center py-4 text-xl bg-yellow text-olive font-extrabold rounded-lg hover:bg-yellow/90 transition duration-300 transform hover:scale-105">
                            Faire une demande de devis
                        </a>
                    @else
                        <div class="text-red-600 font-bold text-lg p-3 bg-red-50 rounded-lg">Rupture de Stock</div>
                        <button disabled class="block w-full py-4 text-xl bg-gray-400 text-white font-extrabold rounded-lg cursor-not-allowed">
                            Indisponible pour l'instant
                        </button>
                    @endif
                </section>
            </div>
        </div>
    </main>
@endsection