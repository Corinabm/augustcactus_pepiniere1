@extends('layouts.app')

@section('title', 'À propos - August Cactus')

@section('content')
<!-- Espacement pour la navbar fixe -->
<div class="pt-16 sm:pt-20"></div>

<main class="bg-white">
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-24 md:py-28 lg:py-32">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <!-- Texte à gauche -->
                <div>
                    <div class="mb-6 sm:mb-8">
                        <span class="inline-block px-5 py-2 bg-olive/10 text-olive text-xs sm:text-sm font-semibold rounded-full tracking-wide">
                            À PROPOS DE NOUS
                        </span>
                    </div>
                    <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-gray-900 mb-8 sm:mb-10 leading-[0.95] tracking-tight">
                        Votre pépinière<br>
                        de confiance<br>
                    </h1>
                    <p class="text-lg sm:text-xl md:text-2xl text-gray-600 font-light leading-relaxed">
                        Passion, expertise et qualité au service de vos projets végétaux
                    </p>
                </div>

                <!-- Image à droite -->
                <div class="relative lg:order-last w-full">
                    <div class="relative w-full" style="padding-bottom: 75%;">
                        <img src="https://picsum.photos/800/600?random=100"
                             alt="August Cactus pépinière"
                             class="absolute inset-0 w-full h-full object-cover rounded-2xl shadow-xl">
                    </div>
                    <!-- Élément décoratif derrière l'image -->
                    <div class="absolute -bottom-6 -right-6 w-full h-full bg-olive/5 rounded-2xl -z-10"></div>
                </div>
            </div>
        </div>

        <!-- Éléments décoratifs subtils -->
        <div class="absolute top-20 right-10 w-72 h-72 bg-olive/5 rounded-full blur-3xl -z-10"></div>
        <div class="absolute bottom-20 left-10 w-96 h-96 bg-yellow/10 rounded-full blur-3xl -z-10"></div>
    </section>

<!-- Section Notre Histoire -->
<section class="py-12 sm:py-16 md:py-20 bg-gray-50/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div>
                <div class="mb-6">
                    <span class="text-sm font-semibold text-olive/80 tracking-widest uppercase">Notre Histoire</span>
                </div>
                <h2 class="text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900 mb-8 sm:mb-10 leading-tight">
                    Une passion<br>transmise depuis<br><span class="text-olive">70 ans</span>
                </h2>
                <div class="space-y-6 text-lg sm:text-xl text-gray-700 leading-relaxed">
                    <p>
                        Depuis plus de 70 ans, <strong class="text-olive">August Cactus</strong> cultive une passion pour les plantes grasses. Fondée en 1949, notre exploitation gère une collection exceptionnelle de 680 variétés, soigneusement sélectionnées et cultivées avec expertise.
                    </p>
                    <p>
                        Passionnés par notre métier, nous mettons notre savoir-faire au service de nos clients. Nous organisons régulièrement des journées portes ouvertes pour vous accueillir dans un cadre bucolique à la campagne, où vous découvrirez notre collection.
                    </p>
                    <p>
                        Au-delà de la vente, nous vous accompagnons dans la création de jardins de rocailles en vous prodiguant nos conseils avisés et notre expérience.
                    </p>
                </div>
            </div>
            <div class="order-first lg:order-last">
                <div class="relative">
                    <img src="https://picsum.photos/600/400?random=100"
                         alt="Notre pépinière"
                         class="w-full h-auto rounded-2xl shadow-xl">
                    <!-- Élément décoratif -->
                    <div class="absolute -bottom-6 -left-6 w-full h-full bg-olive/5 rounded-2xl -z-10"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Nos Valeurs -->
<section class="py-12 sm:py-16 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 sm:mb-16">
            <div class="mb-6">
                <span class="text-sm font-semibold text-olive/80 tracking-widest uppercase">Nos Valeurs</span>
            </div>
            <h2 class="text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900 mb-6">
                Ce qui nous anime
            </h2>
            <p class="text-xl sm:text-2xl text-gray-600 max-w-2xl mx-auto font-light">
                Six piliers qui guident notre travail au quotidien
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            <!-- Valeur 1 -->
            <div class="group text-center">
                <div class="bg-white rounded-3xl p-8 sm:p-10 h-full border border-gray-200 hover:border-olive/50 transition-all duration-300 hover:shadow-xl">
                    <div class="mb-8">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-olive/10 rounded-2xl group-hover:bg-olive group-hover:scale-110 transition-all duration-300">
                            <svg class="w-10 h-10 text-olive group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">
                        Qualité
                    </h3>
                    <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                        Nous sélectionnons avec soin chaque plante pour garantir leur santé et leur beauté. Notre expertise nous permet d'offrir des végétaux robustes et adaptés.
                    </p>
                </div>
            </div>

            <!-- Valeur 2 -->
            <div class="group text-center">
                <div class="bg-white rounded-3xl p-8 sm:p-10 h-full border border-gray-200 hover:border-olive/50 transition-all duration-300 hover:shadow-xl">
                    <div class="mb-8">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-olive/10 rounded-2xl group-hover:bg-olive group-hover:scale-110 transition-all duration-300">
                            <svg class="w-10 h-10 text-olive group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">
                        Passion
                    </h3>
                    <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                        Notre amour pour les plantes se reflète dans chaque aspect de notre travail. Nous partageons notre savoir-faire avec enthousiasme et dévouement.
                    </p>
                </div>
            </div>

            <!-- Valeur 3 -->
            <div class="group text-center">
                <div class="bg-white rounded-3xl p-8 sm:p-10 h-full border border-gray-200 hover:border-olive/50 transition-all duration-300 hover:shadow-xl">
                    <div class="mb-8">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-olive/10 rounded-2xl group-hover:bg-olive group-hover:scale-110 transition-all duration-300">
                            <svg class="w-10 h-10 text-olive group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">
                        Service
                    </h3>
                    <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                        Nous accompagnons nos clients dans leurs projets avec des conseils personnalisés. Votre satisfaction est notre priorité absolue.
                    </p>
                </div>
            </div>

            <!-- Valeur 4 -->
            <div class="group text-center">
                <div class="bg-white rounded-3xl p-8 sm:p-10 h-full border border-gray-200 hover:border-olive/50 transition-all duration-300 hover:shadow-xl">
                    <div class="mb-8">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-olive/10 rounded-2xl group-hover:bg-olive group-hover:scale-110 transition-all duration-300">
                            <svg class="w-10 h-10 text-olive group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">
                        Durabilité
                    </h3>
                    <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                        Nous adoptons des pratiques respectueuses de l'environnement et privilégions les méthodes de culture écologiques et durables.
                    </p>
                </div>
            </div>

            <!-- Valeur 5 -->
            <div class="group text-center">
                <div class="bg-white rounded-3xl p-8 sm:p-10 h-full border border-gray-200 hover:border-olive/50 transition-all duration-300 hover:shadow-xl">
                    <div class="mb-8">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-olive/10 rounded-2xl group-hover:bg-olive group-hover:scale-110 transition-all duration-300">
                            <svg class="w-10 h-10 text-olive group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">
                        Expertise
                    </h3>
                    <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                        Forte de 30 ans d'expérience, notre équipe possède une connaissance approfondie des plantes et de leurs besoins spécifiques.
                    </p>
                </div>
            </div>

            <!-- Valeur 6 -->
            <div class="group text-center">
                <div class="bg-white rounded-3xl p-8 sm:p-10 h-full border border-gray-200 hover:border-olive/50 transition-all duration-300 hover:shadow-xl">
                    <div class="mb-8">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-olive/10 rounded-2xl group-hover:bg-olive group-hover:scale-110 transition-all duration-300">
                            <svg class="w-10 h-10 text-olive group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">
                        Innovation
                    </h3>
                    <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                        Nous restons à l'écoute des nouvelles tendances et techniques pour améliorer continuellement nos services et notre offre.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section CTA -->
<section class="py-16 sm:py-20 md:py-24 bg-gradient-to-br from-olive/5 via-yellow/5 to-olive/10 relative overflow-hidden">
    <!-- Formes décoratives -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-olive/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-yellow/10 rounded-full blur-3xl"></div>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h2 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-gray-900 mb-8 sm:mb-10 leading-tight">
            Envie d'en<br>savoir plus ?
        </h2>
        <p class="text-xl sm:text-2xl md:text-3xl text-gray-600 mb-12 sm:mb-16 font-light leading-relaxed max-w-3xl mx-auto">
            N'hésitez pas à nous rendre visite ou à nous contacter pour découvrir notre pépinière et échanger avec notre équipe passionnée
        </p>
        <a href="{{ route('contact') }}"
           class="group inline-flex items-center gap-3 px-10 sm:px-12 py-5 sm:py-6 bg-olive text-white font-bold text-lg sm:text-xl rounded-full shadow-xl hover:bg-green-800 transition-all duration-300">
            <span>Nous contacter</span>
            <svg class="w-6 h-6 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
        </a>
    </div>
</section>
@endsection

@section('styles')
<style>
    html {
        scroll-behavior: smooth;
    }

    @media (prefers-reduced-motion: reduce) {
        *,
        *::before,
        *::after {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.01ms !important;
        }
    }
</style>
@endsection
