@extends('layouts.app')

@section('title', 'Aménagement Paysager - August Cactus')

@section('content')
<!-- Espacement pour la navbar fixe -->
<div class="pt-24"></div>

<!-- Section Hero -->
<section class="relative bg-white py-12 sm:py-16 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-3 sm:mb-4 text-olive">Aménagement Paysager</h1>
        <p class="text-base sm:text-lg md:text-xl text-gray-600">Créez l'espace extérieur de vos rêves avec nos experts</p>
    </div>
</section>

<!-- Section Introduction -->
<section class="py-12 sm:py-16 md:py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
            <div>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-olive mb-4 sm:mb-6">Transformez vos espaces extérieurs</h2>
                <div class="space-y-4 text-gray-700 text-base sm:text-lg">
                    <p>
                        Votre jardin est bien plus qu'un simple espace extérieur. C'est un lieu de vie, de détente et de partage. Chez <strong>August Cactus</strong>, nous mettons notre expertise au service de vos projets d'aménagement paysager pour créer des espaces uniques qui vous ressemblent.
                    </p>
                    <p>
                        De la conception à la réalisation, notre équipe vous accompagne à chaque étape pour donner vie à vos envies. Que vous souhaitiez créer un jardin tropical, un espace zen ou un coin détente contemporain, nous adaptons nos prestations à vos besoins et à votre budget.
                    </p>
                </div>
            </div>
            <div>
                <img src="https://picsum.photos/600/400?random=60" alt="Aménagement paysager" class="w-full h-auto shadow-xl">
            </div>
        </div>
    </div>
</section>

<!-- Section Nos Prestations -->
<section class="py-12 sm:py-16 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-olive mb-8 sm:mb-12 text-center">Nos Prestations</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            <!-- Prestation 1 -->
            <div class="bg-gray-50 p-6 sm:p-8">
                <div class="text-4xl sm:text-5xl mb-4">🌳</div>
                <h3 class="text-xl sm:text-2xl font-bold text-olive mb-3">Conception de jardins</h3>
                <p class="text-gray-600 text-sm sm:text-base">
                    Étude personnalisée de votre projet avec plans détaillés et sélection des végétaux adaptés à votre environnement et vos goûts.
                </p>
            </div>

            <!-- Prestation 2 -->
            <div class="bg-gray-50 p-6 sm:p-8">
                <div class="text-4xl sm:text-5xl mb-4">🌿</div>
                <h3 class="text-xl sm:text-2xl font-bold text-olive mb-3">Plantation</h3>
                <p class="text-gray-600 text-sm sm:text-base">
                    Plantation d'arbres, arbustes et plantes selon les règles de l'art pour garantir une bonne reprise et une croissance optimale.
                </p>
            </div>

            <!-- Prestation 3 -->
            <div class="bg-gray-50 p-6 sm:p-8">
                <div class="text-4xl sm:text-5xl mb-4">🪨</div>
                <h3 class="text-xl sm:text-2xl font-bold text-olive mb-3">Massifs & Rocailles</h3>
                <p class="text-gray-600 text-sm sm:text-base">
                    Création de massifs colorés et de rocailles esthétiques pour structurer votre jardin et apporter du relief à vos espaces.
                </p>
            </div>

            <!-- Prestation 4 -->
            <div class="bg-gray-50 p-6 sm:p-8">
                <div class="text-4xl sm:text-5xl mb-4">💧</div>
                <h3 class="text-xl sm:text-2xl font-bold text-olive mb-3">Irrigation</h3>
                <p class="text-gray-600 text-sm sm:text-base">
                    Installation de systèmes d'arrosage automatique pour faciliter l'entretien et optimiser la consommation d'eau.
                </p>
            </div>

            <!-- Prestation 5 -->
            <div class="bg-gray-50 p-6 sm:p-8">
                <div class="text-4xl sm:text-5xl mb-4">🌱</div>
                <h3 class="text-xl sm:text-2xl font-bold text-olive mb-3">Engazonnement</h3>
                <p class="text-gray-600 text-sm sm:text-base">
                    Création de pelouses par semis ou placage pour un gazon dense et verdoyant adapté à votre usage.
                </p>
            </div>

            <!-- Prestation 6 -->
            <div class="bg-gray-50 p-6 sm:p-8">
                <div class="text-4xl sm:text-5xl mb-4">🛠️</div>
                <h3 class="text-xl sm:text-2xl font-bold text-olive mb-3">Entretien</h3>
                <p class="text-gray-600 text-sm sm:text-base">
                    Services d'entretien régulier pour maintenir la beauté de vos aménagements : taille, désherbage, fertilisation.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section Notre Processus -->
<section class="py-12 sm:py-16 md:py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-olive mb-8 sm:mb-12 text-center">Notre Processus</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 sm:gap-8">
            <!-- Étape 1 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-olive text-white font-bold text-2xl flex items-center justify-center rounded-full mx-auto mb-4">1</div>
                <h3 class="text-lg font-bold text-olive mb-2">Consultation</h3>
                <p class="text-gray-600 text-sm">Rencontre pour comprendre vos besoins et vos envies</p>
            </div>

            <!-- Étape 2 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-olive text-white font-bold text-2xl flex items-center justify-center rounded-full mx-auto mb-4">2</div>
                <h3 class="text-lg font-bold text-olive mb-2">Conception</h3>
                <p class="text-gray-600 text-sm">Élaboration de plans et choix des végétaux</p>
            </div>

            <!-- Étape 3 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-olive text-white font-bold text-2xl flex items-center justify-center rounded-full mx-auto mb-4">3</div>
                <h3 class="text-lg font-bold text-olive mb-2">Réalisation</h3>
                <p class="text-gray-600 text-sm">Mise en œuvre de l'aménagement par nos experts</p>
            </div>

            <!-- Étape 4 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-olive text-white font-bold text-2xl flex items-center justify-center rounded-full mx-auto mb-4">4</div>
                <h3 class="text-lg font-bold text-olive mb-2">Suivi</h3>
                <p class="text-gray-600 text-sm">Accompagnement et conseils d'entretien</p>
            </div>
        </div>
    </div>
</section>

<!-- Section Galerie -->
<section class="py-12 sm:py-16 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-olive mb-8 sm:mb-12 text-center">Nos Réalisations</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
            @for ($i = 61; $i <= 66; $i++)
                <div class="overflow-hidden shadow-lg">
                    <img src="https://picsum.photos/600/400?random={{ $i }}" alt="Réalisation {{ $i - 60 }}" class="w-full h-64 object-cover">
                </div>
            @endfor
        </div>
    </div>
</section>

<!-- Section CTA -->
<section class="py-12 sm:py-16 md:py-20 bg-white border-t border-gray-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4 sm:mb-6 text-olive">Prêt à transformer votre jardin ?</h2>
        <p class="text-lg sm:text-xl mb-6 sm:mb-8 text-gray-600">
            Contactez-nous pour une consultation gratuite et recevez un devis personnalisé pour votre projet d'aménagement paysager.
        </p>
        <div class="flex justify-center">
            <a href="{{ route('contact') }}" class="bg-yellow text-olive px-6 sm:px-8 py-3 sm:py-4 font-bold text-base sm:text-lg hover:bg-yellow/90 transition-colors duration-300 rounded-lg">
                Demander un devis gratuit
            </a>
        </div>
    </div>
</section>
@endsection
