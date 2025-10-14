@extends('layouts.app')

@section('title', 'Accueil - August Cactus')

@section('content')

    <!-- Bannière Héros -->
    <section class="relative min-h-screen flex items-center">
        <!-- Image de background -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/hero-background.jpg') }}');"></div>
        <!-- Overlay sombre pour améliorer la lisibilité du texte -->
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="text-center">
                <h2 class="text-5xl md:text-6xl font-bold mb-6 text-black">Découvrez notre univers fascinant de plantes et cactus</h2>
                <p class="text-xl md:text-2xl mb-8 text-black">Plantes vertes et fleuries, cactus, succulentes et autres</p>
                <a href="{{ route('plantes.catalogue') }}" class="inline-block bg-yellow text-olive px-8 py-4 rounded-lg font-bold text-lg hover:bg-yellow-400 transition duration-300 shadow-lg">
                    Découvrir nos plantes
                </a>
            </div>
        </div>
    </section>

    <!-- Section Services -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center mb-12 text-olive">Nos Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <a href="{{ route('amenagement') }}" class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('images/service-amenagement.jpg') }}" alt="Aménagement Paysager" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-4 text-olive">Aménagement Paysager</h3>
                        <p class="text-gray-600">Créez des espaces verts uniques avec nos experts en aménagement extérieur.</p>
                    </div>
                </a>

                <!-- Service 2 -->
                <a href="{{ route('location') }}" class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('images/service-location.jpg') }}" alt="Location de Plantes" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-4 text-olive">Location de Plantes</h3>
                        <p class="text-gray-600">Louez des plantes pour vos événements professionnels ou personnels.</p>
                    </div>
                </a>

                <!-- Service 3 -->
                <a href="{{ route('services') }}#decoration" class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('images/service-decoration.jpg') }}" alt="Décoration Végétale" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-4 text-olive">Décoration Végétale</h3>
                        <p class="text-gray-600">Sublimez vos intérieurs avec nos compositions végétales sur mesure.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Cartes de Confiance Glassmorphisme -->
    <section class="py-20 bg-gradient-to-br from-olive via-green-800 to-olive relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-10 left-10 w-72 h-72 bg-yellow rounded-full filter blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 bg-green-400 rounded-full filter blur-3xl"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Carte 1 -->
                <div class="backdrop-blur-md bg-white/10 rounded-2xl p-8 border border-white/20 shadow-2xl">
                    <div class="text-center">
                        <div class="text-5xl font-bold text-yellow mb-2">99%</div>
                        <p class="text-white text-lg">Clients Satisfaits</p>
                    </div>
                </div>

                <!-- Carte 2 -->
                <div class="backdrop-blur-md bg-white/10 rounded-2xl p-8 border border-white/20 shadow-2xl">
                    <div class="text-center">
                        <div class="text-5xl font-bold text-yellow mb-2">+680</div>
                        <p class="text-white text-lg">Variétés de Plantes</p>
                    </div>
                </div>

                <!-- Carte 3 -->
                <div class="backdrop-blur-md bg-white/10 rounded-2xl p-8 border border-white/20 shadow-2xl">
                    <div class="text-center">
                        <div class="text-5xl font-bold text-yellow mb-2">30 ans</div>
                        <p class="text-white text-lg">D'Expertise</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Catalogue -->
    <section id="catalogue" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center mb-4 text-olive">Découvrez notre catalogue</h2>
            <p class="text-center text-gray-600 mb-12 text-lg">Une sélection de nos plus belles variétés</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <!-- Catégorie 1 - Cactus -->
                <a href="{{ route('plantes.catalogue') }}?categorie=cactus" class="flex flex-col items-center">
                    <div class="w-64 h-64 rounded-full overflow-hidden shadow-lg mb-6">
                        <img src="{{ asset('images/categorie-cactus.jpg') }}" alt="Cactus" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-2xl font-bold text-olive">Cactus</h3>
                </a>

                <!-- Catégorie 2 - Succulentes -->
                <a href="{{ route('plantes.catalogue') }}?categorie=succulentes" class="flex flex-col items-center">
                    <div class="w-64 h-64 rounded-full overflow-hidden shadow-lg mb-6">
                        <img src="{{ asset('images/categorie-succulentes.jpg') }}" alt="Succulentes" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-2xl font-bold text-olive">Succulentes</h3>
                </a>

                <!-- Catégorie 3 - Plantes Diverses -->
                <a href="{{ route('plantes.catalogue') }}?categorie=diverses" class="flex flex-col items-center">
                    <div class="w-64 h-64 rounded-full overflow-hidden shadow-lg mb-6">
                        <img src="{{ asset('images/categorie-diverses.jpg') }}" alt="Plantes Diverses" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-2xl font-bold text-olive">Plantes Diverses</h3>
                </a>
            </div>

            <div class="text-center">
                <a href="#" class="inline-block bg-yellow text-olive px-10 py-4 rounded-lg font-bold text-lg hover:bg-yellow-400 transition duration-300 shadow-lg">
                    Explorez nos plantes
                </a>
            </div>
        </div>
    </section>

    <!-- Section Certification -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center mb-12 text-olive">Certification</h2>
            <div class="flex justify-center">
                <div class="w-64 h-64 bg-gray-200 rounded-lg flex items-center justify-center">
                    <svg class="w-32 h-32 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Localisation -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center mb-12 text-olive">Où Nous Trouver</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Carte (placeholder) -->
                <div class="bg-gray-300 rounded-lg h-96 flex items-center justify-center">
                    <div class="text-center">
                        <svg class="w-16 h-16 text-gray-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <p class="text-gray-600 font-semibold">Carte interactive à venir</p>
                    </div>
                </div>

                <!-- Informations -->
                <div class="space-y-8">
                    <div>
                        <h3 class="text-2xl font-bold mb-4 text-olive flex items-center">
                            <svg class="w-6 h-6 mr-3 text-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Horaires d'ouverture
                        </h3>
                        <div class="space-y-2 text-gray-600 ml-9">
                            <p><span class="font-semibold">Lundi - Vendredi :</span> 9h00 - 18h30</p>
                            <p><span class="font-semibold">Samedi :</span> 9h00 - 17h00</p>
                            <p><span class="font-semibold">Dimanche :</span> Fermé</p>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-4 text-olive flex items-center">
                            <svg class="w-6 h-6 mr-3 text-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Adresse
                        </h3>
                        <p class="text-gray-600 ml-9">Chemin Petite Rivière, Rond point de Pelletier<br>97232 Le Lamentin</p>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-4 text-olive flex items-center">
                            <svg class="w-6 h-6 mr-3 text-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            Contact
                        </h3>
                        <div class="space-y-2 text-gray-600 ml-9">
                            <p><span class="font-semibold">Téléphone :</span> 0696 80 59 74</p>
                            <p><span class="font-semibold">Email :</span> augustcactus@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
