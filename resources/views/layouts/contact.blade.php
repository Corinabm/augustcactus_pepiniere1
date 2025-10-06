@extends('layouts.app')

@section('title', 'Contact - August Cactus')

@section('content')
    <!-- Espacement pour la navbar fixe -->
    <div class="pt-24"></div>

    <!-- Section Contact -->
    <section class="relative min-h-screen py-16 md:py-32 overflow-hidden bg-white">
        <!-- Formes décoratives d'arrière-plan -->
        <div class="absolute top-20 left-5 md:left-20 w-64 md:w-96 h-64 md:h-96 bg-yellow/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-5 md:right-20 w-80 md:w-[500px] h-80 md:h-[500px] bg-olive/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- En-tête centré -->
            <div class="text-center mb-12 md:mb-20">
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-olive mb-4 md:mb-6 tracking-tight">Contactez-nous</h1>
                <p class="text-base md:text-xl text-gray-600 max-w-2xl mx-auto px-4">Nous sommes à votre écoute pour répondre à toutes vos questions</p>
            </div>

            <!-- Conteneur principal centré avec positionnement relatif pour le chevauchement -->
            <div class="relative max-w-5xl mx-auto">

                <!-- Grand conteneur blanc (Formulaire) -->
                <div class="relative bg-white rounded-2xl md:rounded-3xl border border-gray-200 p-6 sm:p-8 md:p-12 lg:p-16 xl:pr-[450px]">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-olive mb-6 md:mb-10 text-center md:text-left">Envoyez-nous un message</h2>

                    <!-- Messages de statut -->
                    @if(session('success'))
                        <div class="mb-6 md:mb-8 p-3 md:p-4 bg-green-50 border-l-4 border-green-500 text-green-700 rounded-lg text-sm md:text-base">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="mb-6 md:mb-8 p-3 md:p-4 bg-red-50 border-l-4 border-red-500 text-red-700 rounded-lg text-sm md:text-base">
                            {{ session('error') }}
                        </div>
                    @endif

                    <!-- Indicateur de champs requis -->
                    <p class="text-sm text-gray-600 mb-6">Les champs marqués d'un astérisque (*) sont obligatoires.</p>

                    <form action="{{ route('contact.submit') }}" method="POST" class="max-w-2xl mx-auto space-y-5 md:space-y-6">
                        @csrf

                        <!-- Nom et Prénom -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                            <div>
                                <label for="nom" class="block text-sm font-semibold text-gray-700 mb-2">Nom *</label>
                                <input
                                    type="text"
                                    id="nom"
                                    name="nom"
                                    value="{{ old('nom') }}"
                                    required
                                    class="w-full px-4 md:px-5 py-3 md:py-3.5 border {{ $errors->has('nom') ? 'border-red-400' : 'border-gray-300' }} rounded-lg md:rounded-xl focus:ring-2 focus:ring-olive/30 focus:border-olive transition-all duration-300 bg-gray-50 hover:bg-white text-sm md:text-base"
                                    placeholder="Votre nom"
                                >
                                @error('nom')
                                    <p class="mt-1.5 md:mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="prenom" class="block text-sm font-semibold text-gray-700 mb-2">Prénom *</label>
                                <input
                                    type="text"
                                    id="prenom"
                                    name="prenom"
                                    value="{{ old('prenom') }}"
                                    required
                                    class="w-full px-4 md:px-5 py-3 md:py-3.5 border {{ $errors->has('prenom') ? 'border-red-400' : 'border-gray-300' }} rounded-lg md:rounded-xl focus:ring-2 focus:ring-olive/30 focus:border-olive transition-all duration-300 bg-gray-50 hover:bg-white text-sm md:text-base"
                                    placeholder="Votre prénom"
                                >
                                @error('prenom')
                                    <p class="mt-1.5 md:mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email *</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                class="w-full px-4 md:px-5 py-3 md:py-3.5 border {{ $errors->has('email') ? 'border-red-400' : 'border-gray-300' }} rounded-lg md:rounded-xl focus:ring-2 focus:ring-olive/30 focus:border-olive transition-all duration-300 bg-gray-50 hover:bg-white text-sm md:text-base"
                                placeholder="votre.email@exemple.com"
                            >
                            @error('email')
                                <p class="mt-1.5 md:mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Sujet -->
                        <div>
                            <label for="sujet" class="block text-sm font-semibold text-gray-700 mb-2">Sujet *</label>
                            <select
                                id="sujet"
                                name="sujet"
                                required
                                class="w-full px-4 md:px-5 py-3 md:py-3.5 border {{ $errors->has('sujet') ? 'border-red-400' : 'border-gray-300' }} rounded-lg md:rounded-xl focus:ring-2 focus:ring-olive/30 focus:border-olive transition-all duration-300 bg-gray-50 hover:bg-white text-sm md:text-base"
                            >
                                <option value="">Choisissez un sujet</option>
                                <option value="conseil" {{ old('sujet') == 'conseil' ? 'selected' : '' }}>Conseil et entretien de plantes</option>
                                <option value="achat" {{ old('sujet') == 'achat' ? 'selected' : '' }}>Demande d'achat ou de devis</option>
                                <option value="autre" {{ old('sujet') == 'autre' ? 'selected' : '' }}>Autre question</option>
                            </select>
                            @error('sujet')
                                <p class="mt-1.5 md:mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message *</label>
                            <textarea
                                id="message"
                                name="message"
                                rows="5"
                                required
                                class="w-full px-4 md:px-5 py-3 md:py-3.5 border {{ $errors->has('message') ? 'border-red-400' : 'border-gray-300' }} rounded-lg md:rounded-xl focus:ring-2 focus:ring-olive/30 focus:border-olive transition-all duration-300 resize-none bg-gray-50 hover:bg-white text-sm md:text-base"
                                placeholder="Écrivez votre message ici..."
                            >{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-1.5 md:mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Protection anti-spam -->
                        <div class="hidden" aria-hidden="true">
                            <label for="honeypot">Laissez ce champ vide</label>
                            <input
                                type="text"
                                id="honeypot"
                                name="honeypot"
                                tabindex="-1"
                                autocomplete="off"
                            >
                        </div>

                        <!-- Bouton Envoyer -->
                        <div class="flex justify-center pt-2">
                            <button
                                type="submit"
                                class="w-full md:w-auto px-8 md:px-12 bg-olive text-white py-3.5 md:py-4 rounded-lg md:rounded-xl font-bold text-base md:text-lg hover:bg-olive/90 transition-all duration-300 shadow-lg md:shadow-xl hover:shadow-xl md:hover:shadow-2xl transform hover:-translate-y-1"
                            >
                                Envoyer le message
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Bloc d'informations de contact (Chevauchement) - Vert olive -->
                <div class="relative xl:absolute mt-8 xl:mt-0 xl:top-20 xl:right-8 w-full xl:w-[380px] mx-auto xl:mx-0">
                    <!-- Background vert olive -->
                    <div class="absolute inset-0 bg-olive rounded-2xl md:rounded-3xl"></div>

                    <!-- Formes décoratives internes -->
                    <div class="absolute top-6 md:top-8 right-6 md:right-8 w-20 md:w-28 h-20 md:h-28 bg-yellow/20 rounded-full blur-2xl md:blur-3xl"></div>
                    <div class="absolute bottom-6 md:bottom-8 left-6 md:left-8 w-28 md:w-36 h-28 md:h-36 bg-white/10 rounded-full blur-2xl md:blur-3xl"></div>

                    <!-- Carte glassmorphisme -->
                    <div class="relative backdrop-blur-xl bg-white/5 rounded-2xl md:rounded-3xl p-6 md:p-8 border border-white/20 shadow-2xl">
                        <h3 class="text-xl md:text-2xl font-bold text-white mb-6 md:mb-8">Nos Coordonnées</h3>

                        <div class="space-y-2 md:space-y-3">
                            <!-- Carte Téléphone - Glassmorphisme blanc avec coins pilule -->
                            <a href="tel:+596696805974" class="block">
                                <div class="relative backdrop-blur-xl bg-white/20 rounded-full p-3 md:p-4 shadow-lg border border-white/30">
                                    <div class="flex items-center space-x-3">
                                        <div class="flex items-center justify-center flex-shrink-0">
                                            <svg class="w-6 md:w-7 h-6 md:h-7 text-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-xs font-light text-white/70 mb-0.5">Téléphone</p>
                                            <p class="text-white font-light text-sm md:text-base">0696 80 59 74</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <!-- Carte Email - Glassmorphisme blanc avec coins pilule -->
                            <a href="mailto:augustcactus@gmail.com" class="block">
                                <div class="relative backdrop-blur-xl bg-white/20 rounded-full p-3 md:p-4 shadow-lg border border-white/30">
                                    <div class="flex items-center space-x-3">
                                        <div class="flex items-center justify-center flex-shrink-0">
                                            <svg class="w-6 md:w-7 h-6 md:h-7 text-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                            </svg>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-xs font-light text-white/70 mb-0.5">Email</p>
                                            <p class="text-white font-light text-xs md:text-sm truncate">augustcactus@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <!-- Carte Adresse - Glassmorphisme blanc avec coins pilule -->
                            <div>
                                <div class="relative backdrop-blur-xl bg-white/20 rounded-full p-3 md:p-4 shadow-lg border border-white/30">
                                    <div class="flex items-center space-x-3">
                                        <div class="flex items-center justify-center flex-shrink-0">
                                            <svg class="w-6 md:w-7 h-6 md:h-7 text-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-xs font-light text-white/70 mb-0.5">Adresse</p>
                                            <p class="text-white font-light text-xs md:text-sm leading-tight">Chemin Petite Riviere, 97232 Le Lamentin</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Horaires -->
                            <div class="pt-4 md:pt-6 mt-3 md:mt-4 border-t border-white/20">
                                <p class="text-sm font-bold text-white mb-3">Horaires d'ouverture</p>
                                <div class="text-white/90 space-y-1.5 md:space-y-2 text-xs md:text-sm">
                                    <div class="flex items-center space-x-2">
                                        <span class="w-2 h-2 bg-yellow rounded-full"></span>
                                        <p><span class="font-semibold">Lun - Ven :</span> 9h00 - 18h30</p>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <span class="w-2 h-2 bg-yellow rounded-full"></span>
                                        <p><span class="font-semibold">Samedi :</span> 9h00 - 17h00</p>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <span class="w-2 h-2 bg-yellow/60 rounded-full"></span>
                                        <p><span class="font-semibold">Dimanche :</span> Fermé</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Espacement pour le bloc qui chevauche (uniquement sur desktop) -->
            <div class="hidden xl:block h-24"></div>
        </div>
    </section>

@endsection
