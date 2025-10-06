@extends('layouts.app')

@section('title', 'À propos - August Cactus')

@section('content')
<!-- Espacement pour la navbar fixe -->
<div class="pt-24"></div>

<!-- Section Hero -->
<section class="relative bg-white py-12 sm:py-16 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-3 sm:mb-4 text-olive">À propos de nous</h1>
        <p class="text-base sm:text-lg md:text-xl text-gray-600">Découvrez l'histoire et les valeurs d'August Cactus</p>
    </div>
</section>

<!-- Section Notre Histoire -->
<section class="py-12 sm:py-16 md:py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
            <div>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-olive mb-4 sm:mb-6">Notre Histoire</h2>
                <div class="space-y-4 text-gray-700 text-base sm:text-lg">
                    <p>
                        Depuis plus de 30 ans, <strong>August Cactus</strong> est votre pépinière de confiance, spécialisée dans la culture et la vente de plantes grasses, cactus et plantes tropicales adaptées au climat local.
                    </p>
                    <p>
                        Fondée par une famille passionnée de botanique, notre pépinière s'est développée au fil des années pour devenir une référence dans la région. Nous cultivons nos plantes avec soin et expertise pour vous offrir des végétaux de qualité supérieure.
                    </p>
                    <p>
                        Notre engagement envers l'excellence et le service client nous a permis de fidéliser une clientèle variée, des particuliers aux professionnels de l'aménagement paysager.
                    </p>
                </div>
            </div>
            <div class="order-first lg:order-last">
                <img src="https://picsum.photos/600/400?random=100" alt="Notre pépinière" class="w-full h-auto shadow-xl">
            </div>
        </div>
    </div>
</section>

<!-- Section Nos Valeurs -->
<section class="py-12 sm:py-16 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-olive mb-8 sm:mb-12 text-center">Nos Valeurs</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            <!-- Valeur 1 -->
            <div class="bg-gray-50 p-6 sm:p-8 text-center">
                <div class="text-4xl sm:text-5xl mb-4">🌱</div>
                <h3 class="text-xl sm:text-2xl font-bold text-olive mb-3">Qualité</h3>
                <p class="text-gray-600 text-sm sm:text-base">
                    Nous sélectionnons avec soin chaque plante pour garantir leur santé et leur beauté. Notre expertise nous permet d'offrir des végétaux robustes et adaptés.
                </p>
            </div>

            <!-- Valeur 2 -->
            <div class="bg-gray-50 p-6 sm:p-8 text-center">
                <div class="text-4xl sm:text-5xl mb-4">💚</div>
                <h3 class="text-xl sm:text-2xl font-bold text-olive mb-3">Passion</h3>
                <p class="text-gray-600 text-sm sm:text-base">
                    Notre amour pour les plantes se reflète dans chaque aspect de notre travail. Nous partageons notre savoir-faire avec enthousiasme et dévouement.
                </p>
            </div>

            <!-- Valeur 3 -->
            <div class="bg-gray-50 p-6 sm:p-8 text-center">
                <div class="text-4xl sm:text-5xl mb-4">🤝</div>
                <h3 class="text-xl sm:text-2xl font-bold text-olive mb-3">Service</h3>
                <p class="text-gray-600 text-sm sm:text-base">
                    Nous accompagnons nos clients dans leurs projets avec des conseils personnalisés. Votre satisfaction est notre priorité absolue.
                </p>
            </div>

            <!-- Valeur 4 -->
            <div class="bg-gray-50 p-6 sm:p-8 text-center">
                <div class="text-4xl sm:text-5xl mb-4">🌍</div>
                <h3 class="text-xl sm:text-2xl font-bold text-olive mb-3">Durabilité</h3>
                <p class="text-gray-600 text-sm sm:text-base">
                    Nous adoptons des pratiques respectueuses de l'environnement et privilégions les méthodes de culture écologiques et durables.
                </p>
            </div>

            <!-- Valeur 5 -->
            <div class="bg-gray-50 p-6 sm:p-8 text-center">
                <div class="text-4xl sm:text-5xl mb-4">📚</div>
                <h3 class="text-xl sm:text-2xl font-bold text-olive mb-3">Expertise</h3>
                <p class="text-gray-600 text-sm sm:text-base">
                    Forte de 30 ans d'expérience, notre équipe possède une connaissance approfondie des plantes et de leurs besoins spécifiques.
                </p>
            </div>

            <!-- Valeur 6 -->
            <div class="bg-gray-50 p-6 sm:p-8 text-center">
                <div class="text-4xl sm:text-5xl mb-4">🏆</div>
                <h3 class="text-xl sm:text-2xl font-bold text-olive mb-3">Innovation</h3>
                <p class="text-gray-600 text-sm sm:text-base">
                    Nous restons à l'écoute des nouvelles tendances et techniques pour améliorer continuellement nos services et notre offre.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section CTA -->
<section class="py-12 sm:py-16 md:py-20 bg-white border-t border-gray-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4 sm:mb-6 text-olive">Envie d'en savoir plus ?</h2>
        <p class="text-lg sm:text-xl mb-6 sm:mb-8 text-gray-600">
            N'hésitez pas à nous rendre visite ou à nous contacter pour découvrir notre pépinière et échanger avec notre équipe passionnée.
        </p>
        <div class="flex justify-center">
            <a href="{{ route('contact') }}" class="bg-yellow text-olive px-6 sm:px-8 py-3 sm:py-4 font-bold text-base sm:text-lg hover:bg-yellow/90 transition-colors duration-300 rounded-lg">
                Nous contacter
            </a>
        </div>
    </div>
</section>
@endsection
