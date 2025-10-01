<x-layouts.app title="{{ $plante->nom_commun }} - Fiche Produit">
    <x-navigation />

    <main class="container mx-auto px-4 py-8">
        <x-breadcrumb :links="[
            ['url' => '/', 'label' => 'Accueil'], 
            ['url' => route('plantes.index'), 'label' => 'Nos Plantes'],
            ['url' => route('plantes.show', $plante), 'label' => $plante->nom_commun]
        ]" />

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
                    <h1 class="text-4xl font-title text-green-800">{{ $plante->nom_commun }}</h1>
                    <p class="text-xl font-body italic text-gray-500 mb-4">{{ $plante->nom_scientifique }}</p>

                    <div class="flex items-baseline justify-between border-b pb-4">
                        <span class="text-3xl font-bold text-yellow-600">{{ number_format($plante->prix, 2, ',', ' ') }} €</span>
                        <span class="text-lg text-gray-600 bg-gray-100 px-3 py-1 rounded-full">
                            {{ $plante->categorie->nom }}
                        </span>
                    </div>
                    
                    <h2 class="text-2xl font-title text-green-800 pt-4">Description</h2>
                    <p class="text-gray-700 leading-relaxed">{{ $plante->description }}</p>

                    <h2 class="text-2xl font-title text-green-800 pt-4 border-t mt-6">Guide d'Entretien</h2>
                    <div class="grid grid-cols-3 gap-4 text-center text-sm">
                        <div class="p-3 bg-green-50 rounded-lg">
                            <i class="fas fa-seedling text-2xl text-green-700"></i>
                            <p class="mt-1 font-bold">Taille</p>
                            <p class="text-gray-600">{{ ucfirst($plante->taille) }}</p>
                        </div>
                        <div class="p-3 bg-green-50 rounded-lg">
                            <i class="fas fa-sun text-2xl text-green-700"></i>
                            <p class="mt-1 font-bold">Exposition</p>
                            <p class="text-gray-600">{{ ucfirst($plante->exposition) }}</p>
                        </div>
                        <div class="p-3 bg-green-50 rounded-lg">
                            <i class="fas fa-tint text-2xl text-green-700"></i>
                            <p class="mt-1 font-bold">Arrosage</p>
                            <p class="text-gray-600">{{ ucfirst($plante->arrosage) }}</p>
                        </div>
                    </div>

                    @if ($plante->stock > 0)
                        <div class="text-green-600 font-bold">En Stock ({{ $plante->stock }} unités disponibles)</div>
                        <a href="{{ route('plantes.demande.create', $plante) }}" class="block w-full text-center py-4 text-xl bg-yellow-500 text-green-800 font-extrabold rounded-lg hover:bg-yellow-600 transition duration-300 transform hover:scale-105">
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

    <x-footer />
</x-layouts.app>