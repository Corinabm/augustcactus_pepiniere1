<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'August Cactus - Pépinière')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Source Sans Pro', sans-serif;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        olive: '#0A2D19',
                        yellow: '#FFC125',
                    }
                }
            }
        }
    </script>
    @yield('styles')
</head>
<body class="bg-white text-olive">

    <!-- Barre d'annonce fixe en haut -->
    <div id="promo-bar" class="bg-yellow text-black py-2 text-center text-sm fixed top-0 left-0 right-0 z-50">
        <p>🌿 <b>Annonce</b> | Porte ouverte le jeudi 23 octobre 2025 de 9h00 à 12h00</p>
    </div>

    <!-- Navigation fixe sous la barre d'annonce, initialement transparente avec texte blanc -->
    <nav id="navbar" class="fixed top-8 left-0 right-0 z-40 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0">
                    <a href="{{ route('index') }}">
                        <img id="navbar-logo" src="{{ asset('images/logo.png') }}" alt="August Cactus" class="h-12">
                    </a>
                </div>
                <!-- Menu desktop -->
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('plantes.catalogue') }}" class="nav-link hover:text-yellow transition-colors duration-300">Nos plantes</a>
                    <a href="{{ route('galerie') }}" class="nav-link hover:text-yellow transition-colors duration-300">Galerie</a>
                    <a href="{{ route('services') }}" class="nav-link hover:text-yellow transition-colors duration-300">Services</a>
                    <a href="{{ route('a-propos') }}" class="nav-link hover:text-yellow transition-colors duration-300">A propos</a>
                    <a href="{{ route('contact') }}" class="nav-link hover:text-yellow transition-colors duration-300">Contact</a>
                </div>
                <!-- Bouton hamburger mobile -->
                <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg hover:bg-white/10 transition-colors duration-300">
                    <svg class="w-6 h-6 nav-link" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path id="hamburger-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path id="close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
        <!-- Menu mobile -->
        <div id="mobile-menu" class="hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 bg-white shadow-lg">
                <a href="{{ route('plantes.catalogue') }}" class="mobile-nav-link block px-3 py-2 rounded-md text-olive hover:bg-yellow hover:text-olive transition-colors duration-300">Nos plantes</a>
                <a href="{{ route('galerie') }}" class="mobile-nav-link block px-3 py-2 rounded-md text-olive hover:bg-yellow hover:text-olive transition-colors duration-300">Galerie</a>
                <a href="{{ route('services') }}" class="mobile-nav-link block px-3 py-2 rounded-md text-olive hover:bg-yellow hover:text-olive transition-colors duration-300">Services</a>
                <a href="{{ route('a-propos') }}" class="mobile-nav-link block px-3 py-2 rounded-md text-olive hover:bg-yellow hover:text-olive transition-colors duration-300">A propos</a>
                <a href="{{ route('contact') }}" class="mobile-nav-link block px-3 py-2 rounded-md text-olive hover:bg-yellow hover:text-olive transition-colors duration-300">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Script pour gérer le changement de couleur de la navbar au scroll et le menu mobile -->
    <script>
        // Gestion du scroll pour changer la couleur de la navbar
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            const navLinks = document.querySelectorAll('.nav-link');
            const scrollPosition = window.scrollY;

            // Après 100px de scroll, la navbar devient blanche opaque avec texte noir
            if (scrollPosition > 100) {
                navbar.classList.add('bg-white', 'shadow-lg');
                navbar.classList.remove('bg-transparent');
                navLinks.forEach(link => {
                    link.classList.remove('text-black');
                    link.classList.add('text-olive');
                });
            } else {
                // Avant 100px, navbar transparente avec texte noir
                navbar.classList.add('bg-transparent');
                navbar.classList.remove('bg-white', 'shadow-lg');
                navLinks.forEach(link => {
                    link.classList.remove('text-olive');
                    link.classList.add('text-black');
                });
            }
        });

        // Initialiser l'état au chargement de la page
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link');
            if (window.scrollY <= 100) {
                navLinks.forEach(link => {
                    link.classList.add('text-black');
                });
            }

            // Gestion du menu hamburger mobile
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            const closeIcon = document.getElementById('close-icon');

            mobileMenuBtn.addEventListener('click', function() {
                // Toggle du menu
                mobileMenu.classList.toggle('hidden');

                // Toggle des icônes hamburger / close
                hamburgerIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });

            // Fermer le menu mobile lors du clic sur un lien
            const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
            mobileNavLinks.forEach(link => {
                link.addEventListener('click', function() {
                    mobileMenu.classList.add('hidden');
                    hamburgerIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                });
            });
        });
    </script>

    <!-- Contenu principal -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-olive text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h4 class="text-xl font-bold mb-4">August Cactus</h4>
                    <p class="text-gray-300">Votre pépinière de confiance depuis 30 ans</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Navigation</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="{{ route('index') }}" class="hover:text-yellow">Accueil</a></li>
                        <li><a href="{{ route('plantes.catalogue') }}" class="hover:text-yellow">Nos plantes</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-yellow">Services</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-yellow">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Informations</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="{{ route('a-propos') }}" class="hover:text-yellow">À propos</a></li>
                        <li><a href="#" class="hover:text-yellow">CGV</a></li>
                        <li><a href="#" class="hover:text-yellow">Mentions légales</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Suivez-nous</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-yellow">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" class="hover:text-yellow">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 August Cactus. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    @yield('scripts')

</body>
</html>
