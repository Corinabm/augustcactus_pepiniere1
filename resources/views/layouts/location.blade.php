@extends('layouts.app')

@section('title', 'Location de Plantes - August Cactus')

@section('content')
<!-- Espacement pour la navbar fixe -->
<div class="pt-24"></div>

<!-- Section Hero -->
<section class="relative bg-white py-12 sm:py-16 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-3 sm:mb-4 text-olive">Location de Plantes</h1>
        <p class="text-base sm:text-lg md:text-xl text-gray-600">Des plantes pour tous vos événements et espaces temporaires</p>
    </div>
</section>

<!-- Section Introduction -->
<section class="py-12 sm:py-16 md:py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
            <div class="order-last lg:order-first">
                <img src="https://picsum.photos/600/400?random=70" alt="Location de plantes" class="w-full h-auto shadow-xl">
            </div>
            <div>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-olive mb-4 sm:mb-6">Végétalisez vos espaces temporairement</h2>
                <div class="space-y-4 text-gray-700 text-base sm:text-lg">
                    <p>
                        Vous organisez un événement, une réception ou souhaitez simplement dynamiser temporairement vos espaces ? <strong>August Cactus</strong> propose un service de location de plantes flexible et pratique adapté à tous vos besoins.
                    </p>
                    <p>
                        De la livraison à l'installation, en passant par l'entretien pendant toute la durée de location, nous prenons en charge l'ensemble du processus pour vous garantir des végétaux en parfait état.
                    </p>
                    <p>
                        Nos formules s'adaptent à vos projets : location courte durée pour un événement ponctuel ou longue durée pour dynamiser durablement vos espaces professionnels ou personnels.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Nos Formules -->
<section class="py-12 sm:py-16 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-olive mb-8 sm:mb-12 text-center">Nos Formules de Location</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
            <!-- Formule 1 -->
            <div class="bg-gray-50 p-6 sm:p-8">
                <div class="text-4xl sm:text-5xl mb-4">📅</div>
                <h3 class="text-xl sm:text-2xl font-bold text-olive mb-3">Location Événementielle</h3>
                <p class="text-gray-600 text-sm sm:text-base mb-4">
                    Idéale pour vos mariages, réceptions, salons professionnels et événements ponctuels.
                </p>
                <ul class="space-y-2 text-gray-600 text-sm">
                    <li class="flex items-start">
                        <span class="text-olive mr-2">✓</span>
                        <span>Durée : 1 jour à 1 semaine</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-olive mr-2">✓</span>
                        <span>Livraison et installation comprises</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-olive mr-2">✓</span>
                        <span>Récupération après l'événement</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-olive mr-2">✓</span>
                        <span>Large choix de plantes décoratives</span>
                    </li>
                </ul>
            </div>

            <!-- Formule 2 -->
            <div class="bg-gray-50 p-6 sm:p-8 border-2 border-yellow">
                <div class="inline-block bg-yellow text-olive px-3 py-1 rounded-full text-sm font-bold mb-3">Populaire</div>
                <div class="text-4xl sm:text-5xl mb-4">📆</div>
                <h3 class="text-xl sm:text-2xl font-bold text-olive mb-3">Location Moyenne Durée</h3>
                <p class="text-gray-600 text-sm sm:text-base mb-4">
                    Parfaite pour dynamiser temporairement vos bureaux, boutiques ou espaces commerciaux.
                </p>
                <ul class="space-y-2 text-gray-600 text-sm">
                    <li class="flex items-start">
                        <span class="text-olive mr-2">✓</span>
                        <span>Durée : 1 à 6 mois</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-olive mr-2">✓</span>
                        <span>Livraison et installation comprises</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-olive mr-2">✓</span>
                        <span>Entretien mensuel inclus</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-olive mr-2">✓</span>
                        <span>Remplacement en cas de problème</span>
                    </li>
                </ul>
            </div>

            <!-- Formule 3 -->
            <div class="bg-gray-50 p-6 sm:p-8">
                <div class="text-4xl sm:text-5xl mb-4">🗓️</div>
                <h3 class="text-xl sm:text-2xl font-bold text-olive mb-3">Location Longue Durée</h3>
                <p class="text-gray-600 text-sm sm:text-base mb-4">
                    Pour végétaliser durablement vos espaces professionnels ou personnels sans l'investissement initial.
                </p>
                <ul class="space-y-2 text-gray-600 text-sm">
                    <li class="flex items-start">
                        <span class="text-olive mr-2">✓</span>
                        <span>Durée : 6 mois et plus</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-olive mr-2">✓</span>
                        <span>Livraison et installation comprises</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-olive mr-2">✓</span>
                        <span>Entretien régulier inclus</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-olive mr-2">✓</span>
                        <span>Tarif dégressif avantageux</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Section Avantages -->
<section class="py-12 sm:py-16 md:py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-olive mb-8 sm:mb-12 text-center">Pourquoi louer vos plantes ?</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
            <div class="text-center">
                <div class="text-4xl sm:text-5xl mb-4">💰</div>
                <h3 class="text-xl font-bold text-olive mb-2">Économique</h3>
                <p class="text-gray-600 text-sm">Pas d'investissement initial, payez uniquement la durée d'utilisation</p>
            </div>
            <div class="text-center">
                <div class="text-4xl sm:text-5xl mb-4">🔄</div>
                <h3 class="text-xl font-bold text-olive mb-2">Flexible</h3>
                <p class="text-gray-600 text-sm">Adaptez le nombre et les variétés selon vos besoins</p>
            </div>
            <div class="text-center">
                <div class="text-4xl sm:text-5xl mb-4">🌿</div>
                <h3 class="text-xl font-bold text-olive mb-2">Sans entretien</h3>
                <p class="text-gray-600 text-sm">Nous gérons l'entretien et le remplacement si nécessaire</p>
            </div>
            <div class="text-center">
                <div class="text-4xl sm:text-5xl mb-4">✨</div>
                <h3 class="text-xl font-bold text-olive mb-2">Toujours parfaites</h3>
                <p class="text-gray-600 text-sm">Des plantes en excellent état pour une décoration impeccable</p>
            </div>
        </div>
    </div>
</section>

<!-- Section Types de Plantes -->
<section class="py-12 sm:py-16 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-olive mb-8 sm:mb-12 text-center">Notre Catalogue de Location</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            @for ($i = 71; $i <= 76; $i++)
                <div class="bg-gray-50 overflow-hidden shadow-lg">
                    <img src="https://picsum.photos/400/300?random={{ $i }}" alt="Plante {{ $i - 70 }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-olive mb-2">Plante Disponible</h3>
                        <p class="text-gray-600 text-sm">Idéale pour vos événements et espaces intérieurs ou extérieurs</p>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>

<!-- Section Comment ça marche -->
<section class="py-12 sm:py-16 md:py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-olive mb-8 sm:mb-12 text-center">Comment ça marche ?</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 sm:gap-8">
            <!-- Étape 1 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-olive text-white font-bold text-2xl flex items-center justify-center rounded-full mx-auto mb-4">1</div>
                <h3 class="text-lg font-bold text-olive mb-2">Demande</h3>
                <p class="text-gray-600 text-sm">Contactez-nous avec vos besoins et la durée souhaitée</p>
            </div>

            <!-- Étape 2 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-olive text-white font-bold text-2xl flex items-center justify-center rounded-full mx-auto mb-4">2</div>
                <h3 class="text-lg font-bold text-olive mb-2">Devis</h3>
                <p class="text-gray-600 text-sm">Recevez votre devis personnalisé sous 24h</p>
            </div>

            <!-- Étape 3 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-olive text-white font-bold text-2xl flex items-center justify-center rounded-full mx-auto mb-4">3</div>
                <h3 class="text-lg font-bold text-olive mb-2">Livraison</h3>
                <p class="text-gray-600 text-sm">Nous livrons et installons les plantes chez vous</p>
            </div>

            <!-- Étape 4 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-olive text-white font-bold text-2xl flex items-center justify-center rounded-full mx-auto mb-4">4</div>
                <h3 class="text-lg font-bold text-olive mb-2">Profitez</h3>
                <p class="text-gray-600 text-sm">Nous gérons l'entretien, vous profitez</p>
            </div>
        </div>
    </div>
</section>

<!-- Section CTA -->
<section class="py-12 sm:py-16 md:py-20 bg-white border-t border-gray-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4 sm:mb-6 text-olive">Besoin de plantes pour votre événement ?</h2>
        <p class="text-lg sm:text-xl mb-6 sm:mb-8 text-gray-600">
            Contactez-nous pour obtenir un devis gratuit et personnalisé pour votre projet de location de plantes.
        </p>
        <div class="flex justify-center">
            <a href="{{ route('contact') }}" class="bg-yellow text-olive px-6 sm:px-8 py-3 sm:py-4 font-bold text-base sm:text-lg hover:bg-yellow/90 transition-colors duration-300 rounded-lg">
                Demander un devis gratuit
            </a>
        </div>
    </div>
</section>
@endsection
