@extends('layouts.app')

@section('title', 'Contact - August Cactus')

@section('content')
    <!-- Espacement pour la navbar fixe -->
    <div class="pt-24"></div>

    <!-- Section Contact -->
    <section class="relative min-h-screen py-8 sm:py-12 md:py-16 lg:py-24 overflow-hidden bg-white">
        <!-- Formes décoratives d'arrière-plan -->
        <div class="absolute top-10 sm:top-20 left-2 sm:left-5 md:left-20 w-48 sm:w-64 md:w-96 h-48 sm:h-64 md:h-96 bg-yellow/10 rounded-full blur-3xl animate-blob"></div>
        <div class="absolute bottom-10 sm:bottom-20 right-2 sm:right-5 md:right-20 w-56 sm:w-80 md:w-[500px] h-56 sm:h-80 md:h-[500px] bg-olive/10 rounded-full blur-3xl animate-blob animation-delay-2000"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- En-tête centré -->
            <div class="text-center mb-6 sm:mb-10 md:mb-14 lg:mb-16">
                <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold text-olive mb-2 sm:mb-3 md:mb-4 lg:mb-6 tracking-tight px-4">Contactez-nous</h1>
                <p class="text-xs sm:text-sm md:text-base lg:text-lg text-gray-600 max-w-2xl mx-auto px-4">Nous sommes à votre écoute pour répondre à toutes vos questions</p>
            </div>

            <!-- Conteneur principal avec grille responsive -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 sm:gap-6 md:gap-8 lg:gap-10 max-w-6xl mx-auto">

                <!-- Bloc d'informations de contact - Vert olive (Affiché EN SECOND sur mobile) -->
                <div class="lg:col-span-1 order-2 lg:order-2">
                    <div class="lg:sticky lg:top-24">
                        <!-- Background vert olive -->
                        <div class="relative bg-olive rounded-xl sm:rounded-2xl lg:rounded-3xl overflow-hidden">
                            <!-- Formes décoratives internes -->
                            <div class="absolute top-6 sm:top-8 right-6 sm:right-8 w-20 sm:w-28 h-20 sm:h-28 bg-yellow/20 rounded-full blur-2xl sm:blur-3xl"></div>
                            <div class="absolute bottom-6 sm:bottom-8 left-6 sm:left-8 w-28 sm:w-36 h-28 sm:h-36 bg-white/10 rounded-full blur-2xl sm:blur-3xl"></div>

                            <!-- Carte glassmorphisme -->
                            <div class="relative backdrop-blur-2xl bg-white/10 rounded-xl sm:rounded-2xl lg:rounded-3xl p-4 sm:p-5 md:p-6 lg:p-8 border border-white/40 shadow-2xl">
                                <h3 class="text-base sm:text-lg md:text-xl lg:text-2xl font-bold text-white mb-3 sm:mb-4 md:mb-5 lg:mb-6">Nos Coordonnées</h3>

                                <div class="space-y-2 sm:space-y-2.5 md:space-y-3">
                                    <!-- Carte Téléphone - Glassmorphisme blanc avec coins pilule -->
                                    <a href="tel:+596696805974" class="block">
                                        <div class="relative backdrop-blur-2xl bg-white/5 rounded-full p-2.5 sm:p-3 md:p-3.5 lg:p-4 shadow-lg border border-white/20">
                                            <div class="flex items-center space-x-2 sm:space-x-2.5 md:space-x-3">
                                                <div class="flex items-center justify-center flex-shrink-0">
                                                    <svg class="w-4 sm:w-5 md:w-6 lg:w-7 h-4 sm:h-5 md:h-6 lg:h-7 text-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                                    </svg>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-[10px] sm:text-xs font-light text-white/70 mb-0.5">Téléphone</p>
                                                    <p class="text-white font-light text-xs sm:text-sm md:text-base">0696 80 59 74</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- Carte Email - Glassmorphisme blanc avec coins pilule -->
                                    <a href="mailto:augustcactus@gmail.com" class="block">
                                        <div class="relative backdrop-blur-2xl bg-white/5 rounded-full p-2.5 sm:p-3 md:p-3.5 lg:p-4 shadow-lg border border-white/20">
                                            <div class="flex items-center space-x-2 sm:space-x-2.5 md:space-x-3">
                                                <div class="flex items-center justify-center flex-shrink-0">
                                                    <svg class="w-4 sm:w-5 md:w-6 lg:w-7 h-4 sm:h-5 md:h-6 lg:h-7 text-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                    </svg>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-[10px] sm:text-xs font-light text-white/70 mb-0.5">Email</p>
                                                    <p class="text-white font-light text-[10px] xs:text-xs sm:text-sm truncate">augustcactus@gmail.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- Carte Adresse - Glassmorphisme blanc avec coins pilule -->
                                    <div>
                                        <div class="relative backdrop-blur-2xl bg-white/5 rounded-full p-2.5 sm:p-3 md:p-3.5 lg:p-4 shadow-lg border border-white/20">
                                            <div class="flex items-center space-x-2 sm:space-x-2.5 md:space-x-3">
                                                <div class="flex items-center justify-center flex-shrink-0">
                                                    <svg class="w-4 sm:w-5 md:w-6 lg:w-7 h-4 sm:h-5 md:h-6 lg:h-7 text-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    </svg>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-[10px] sm:text-xs font-light text-white/70 mb-0.5">Adresse</p>
                                                    <p class="text-white font-light text-[10px] xs:text-xs sm:text-sm leading-tight">Chemin Petite Riviere, 97232 Le Lamentin</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Horaires -->
                                    <div class="pt-2 sm:pt-3 md:pt-4 lg:pt-6 mt-2 sm:mt-2.5 md:mt-3 lg:mt-4 border-t border-white/20">
                                        <p class="text-xs sm:text-sm md:text-base font-bold text-white mb-1.5 sm:mb-2 md:mb-3">Horaires d'ouverture</p>
                                        <div class="text-white/90 space-y-1 sm:space-y-1.5 md:space-y-2 text-[10px] xs:text-xs sm:text-sm">
                                            <div class="flex items-center space-x-1.5 sm:space-x-2">
                                                <span class="w-1.5 h-1.5 sm:w-2 sm:h-2 bg-yellow rounded-full flex-shrink-0"></span>
                                                <p><span class="font-semibold">Lun - Ven :</span> 9h00 - 18h30</p>
                                            </div>
                                            <div class="flex items-center space-x-1.5 sm:space-x-2">
                                                <span class="w-1.5 h-1.5 sm:w-2 sm:h-2 bg-yellow rounded-full flex-shrink-0"></span>
                                                <p><span class="font-semibold">Samedi :</span> 9h00 - 17h00</p>
                                            </div>
                                            <div class="flex items-center space-x-1.5 sm:space-x-2">
                                                <span class="w-1.5 h-1.5 sm:w-2 sm:h-2 bg-yellow/60 rounded-full flex-shrink-0"></span>
                                                <p><span class="font-semibold">Dimanche :</span> Fermé</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Formulaire de contact (Affiché EN PREMIER sur mobile) -->
                <div class="lg:col-span-2 order-1 lg:order-1">
                    <div class="relative bg-white rounded-xl sm:rounded-2xl lg:rounded-3xl border border-gray-200 p-4 sm:p-6 md:p-8 lg:p-10 xl:p-12 shadow-xl">
                        <h2 class="text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl font-bold text-olive mb-3 sm:mb-4 md:mb-6 lg:mb-8 xl:mb-10">Envoyez-nous un message</h2>

                        <!-- Messages de statut -->
                        @if(session('success'))
                            <div class="mb-3 sm:mb-4 md:mb-6 p-2.5 sm:p-3 md:p-4 bg-green-50 border-l-4 border-green-500 text-green-700 rounded-lg text-[11px] sm:text-xs md:text-sm">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="mb-3 sm:mb-4 md:mb-6 p-2.5 sm:p-3 md:p-4 bg-red-50 border-l-4 border-red-500 text-red-700 rounded-lg text-[11px] sm:text-xs md:text-sm">
                                {{ session('error') }}
                            </div>
                        @endif

                        <!-- Indicateur de champs requis -->
                        <p class="text-[11px] sm:text-xs md:text-sm text-gray-600 mb-3 sm:mb-4 md:mb-6">Les champs marqués d'un astérisque (*) sont obligatoires.</p>

                        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-3 sm:space-y-4 md:space-y-5 lg:space-y-6">
                            @csrf

                            <!-- Nom et Prénom -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 sm:gap-3 md:gap-4 lg:gap-6">
                                <div class="group">
                                    <label for="nom" class="block text-[11px] sm:text-xs md:text-sm font-semibold text-gray-700 mb-1 sm:mb-1.5 md:mb-2 transition-colors duration-200 group-focus-within:text-olive">Nom *</label>
                                    <input type="text" id="nom" name="nom" value="{{ old('nom') }}" required class="w-full px-2.5 sm:px-3 md:px-4 lg:px-5 py-2 sm:py-2.5 md:py-3 lg:py-3.5 border {{ $errors->has('nom') ? 'border-red-400' : 'border-gray-300' }} rounded-lg md:rounded-xl focus:ring-2 focus:ring-olive/30 focus:border-olive transition-all duration-300 bg-gray-50 hover:bg-white focus:scale-[1.01] text-xs sm:text-sm md:text-base" placeholder="Votre nom">
                                    @error('nom')
                                        <p class="mt-1 sm:mt-1.5 text-[10px] sm:text-xs md:text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="group">
                                    <label for="prenom" class="block text-[11px] sm:text-xs md:text-sm font-semibold text-gray-700 mb-1 sm:mb-1.5 md:mb-2 transition-colors duration-200 group-focus-within:text-olive">Prénom *</label>
                                    <input type="text" id="prenom" name="prenom" value="{{ old('prenom') }}" required class="w-full px-2.5 sm:px-3 md:px-4 lg:px-5 py-2 sm:py-2.5 md:py-3 lg:py-3.5 border {{ $errors->has('prenom') ? 'border-red-400' : 'border-gray-300' }} rounded-lg md:rounded-xl focus:ring-2 focus:ring-olive/30 focus:border-olive transition-all duration-300 bg-gray-50 hover:bg-white focus:scale-[1.01] text-xs sm:text-sm md:text-base" placeholder="Votre prénom">
                                    @error('prenom')
                                        <p class="mt-1 sm:mt-1.5 text-[10px] sm:text-xs md:text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="group">
                                <label for="email" class="block text-[11px] sm:text-xs md:text-sm font-semibold text-gray-700 mb-1 sm:mb-1.5 md:mb-2 transition-colors duration-200 group-focus-within:text-olive">Email *</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required class="w-full px-2.5 sm:px-3 md:px-4 lg:px-5 py-2 sm:py-2.5 md:py-3 lg:py-3.5 border {{ $errors->has('email') ? 'border-red-400' : 'border-gray-300' }} rounded-lg md:rounded-xl focus:ring-2 focus:ring-olive/30 focus:border-olive transition-all duration-300 bg-gray-50 hover:bg-white focus:scale-[1.01] text-xs sm:text-sm md:text-base" placeholder="votre.email@exemple.com">
                                @error('email')
                                    <p class="mt-1 sm:mt-1.5 text-[10px] sm:text-xs md:text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Sujet -->
                            <div class="group">
                                <label for="sujet" class="block text-[11px] sm:text-xs md:text-sm font-semibold text-gray-700 mb-1 sm:mb-1.5 md:mb-2 transition-colors duration-200 group-focus-within:text-olive">Sujet *</label>
                                <select id="sujet" name="sujet" required class="w-full px-2.5 sm:px-3 md:px-4 lg:px-5 py-2 sm:py-2.5 md:py-3 lg:py-3.5 border {{ $errors->has('sujet') ? 'border-red-400' : 'border-gray-300' }} rounded-lg md:rounded-xl focus:ring-2 focus:ring-olive/30 focus:border-olive transition-all duration-300 bg-gray-50 hover:bg-white focus:scale-[1.01] text-xs sm:text-sm md:text-base cursor-pointer">
                                    <option value="">Choisissez un sujet</option>
                                    <option value="achat" {{ old('sujet') == 'amenagement' ? 'selected' : '' }}>Aménagement</option>
                                    <option value="achat" {{ old('sujet') == 'entretien' ? 'selected' : '' }}>Entretien jardin ou plantes</option>
                                    <option value="achat" {{ old('sujet') == 'location' ? 'selected' : '' }}>Location de plantes</option>
                                    <option value="achat" {{ old('sujet') == 'achat' ? 'selected' : '' }}>Demande d'achat</option>
                                    <option value="achat" {{ old('sujet') == 'devis' ? 'selected' : '' }}>Demande de devis</option>
                                    <option value="autre" {{ old('sujet') == 'autre' ? 'selected' : '' }}>Autre question</option>
                                </select>
                                @error('sujet')
                                    <p class="mt-1 sm:mt-1.5 text-[10px] sm:text-xs md:text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Message -->
                            <div class="group">
                                <label for="message" class="block text-[11px] sm:text-xs md:text-sm font-semibold text-gray-700 mb-1 sm:mb-1.5 md:mb-2 transition-colors duration-200 group-focus-within:text-olive">Message *</label>
                                <textarea
                                    id="message"
                                    name="message"
                                    rows="4"
                                    required
                                    class="w-full px-2.5 sm:px-3 md:px-4 lg:px-5 py-2 sm:py-2.5 md:py-3 lg:py-3.5 border {{ $errors->has('message') ? 'border-red-400' : 'border-gray-300' }} rounded-lg md:rounded-xl focus:ring-2 focus:ring-olive/30 focus:border-olive transition-all duration-300 resize-none bg-gray-50 hover:bg-white focus:scale-[1.01] text-xs sm:text-sm md:text-base"
                                    placeholder="Écrivez votre message ici..."
                                >{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="mt-1 sm:mt-1.5 text-[10px] sm:text-xs md:text-sm text-red-600">{{ $message }}</p>
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
                            <div class="flex justify-center pt-1 sm:pt-2 md:pt-3 lg:pt-4">
                                <button
                                    type="submit"
                                    class="group relative w-full sm:w-auto px-5 sm:px-6 md:px-10 lg:px-12 bg-olive text-white py-2.5 sm:py-3 md:py-3.5 lg:py-4 rounded-lg md:rounded-xl font-bold text-xs sm:text-sm md:text-base lg:text-lg hover:bg-olive/90 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 hover:scale-105 focus:ring-4 focus:ring-olive/30 focus:outline-none overflow-hidden"
                                >
                                    <span class="relative z-10">Envoyer le message</span>
                                    <div class="absolute inset-0 bg-gradient-to-r from-olive to-olive/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
