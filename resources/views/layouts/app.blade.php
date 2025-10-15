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
        /* Amélioration du contraste et du focus */
        .nav-link:focus, .mobile-nav-link:focus, .mobile-dropdown-btn:focus {
            outline: 3px solid #0A2D19;
            outline-offset: 2px;
            border-radius: 4px;
        }
        /* Assurer un fond pour le contraste quand navbar transparente */
        #navbar.bg-transparent .nav-link {
            text-shadow: 0 0 8px rgba(255, 255, 255, 0.8);
        }

        /* Améliorer le contraste du bouton fermer */
        #close-promo-bar:focus {
            outline: 2px solid #0A2D19;
            outline-offset: 2px;
        }

        /* Skip link caché mais accessible au clavier */
        .skip-link {
            position: absolute;
            top: -40px;
            left: 0;
            background: #0A2D19;
            color: white;
            padding: 8px;
            text-decoration: none;
            z-index: 100;
        }

        .skip-link:focus {
            top: 0;
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

    <!-- Script pour éviter le flash de la barre d'annonce -->
    <script>
        // Exécuté immédiatement avant le rendu de la page
        if (sessionStorage.getItem('promoBarClosed') === 'true') {
            document.documentElement.style.setProperty('--promo-bar-display', 'translateY(-100%)');
            document.documentElement.style.setProperty('--navbar-top', '0');
        }
    </script>
    <style>
        :root {
            --promo-bar-display: translateY(0);
            --navbar-top: 2rem;
        }
    </style>
</head>
<body class="bg-white text-black">

    <!-- Skip link pour accessibilité -->
    <a href="#main-content" class="skip-link">Aller au contenu principal</a>

    <!-- Barre d'annonce fixe en haut -->
    <div id="promo-bar" class="bg-yellow text-black py-2 text-center text-sm fixed top-0 left-0 right-0 z-50 transition-transform duration-300" style="transform: var(--promo-bar-display)">
        <div class="max-w-7xl mx-auto px-4 relative">
            <p>🌿Porte ouverte le jeudi 23 octobre 2025 de 9h00 à 12h00</p>
            <button id="close-promo-bar" class="absolute right-4 top-1/2 -translate-y-1/2 hover:bg-black/10 rounded-full p-2 transition-colors min-w-[44px] min-h-[44px] flex items-center justify-center" aria-label="Fermer l'annonce">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Navigation fixe sous la barre d'annonce, initialement transparente avec texte blanc -->
    <nav id="navbar" class="fixed left-0 right-0 z-40 transition-all duration-300" style="top: var(--navbar-top)">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0">
                    <a href="{{ route('index') }}">
                        <img id="navbar-logo" src="{{ asset('images/logo.png') }}" alt="August Cactus - Pépinière" class="h-12" width="78" height="48">
                    </a>
                </div>
                <!-- Menu desktop -->
                <div class="hidden md:flex space-x-8 items-center">
                    <!-- Dropdown Nos plantes -->
                    <div class="relative dropdown-container">
                        <button
                            class="nav-link transition-colors duration-300 flex items-center gap-1 bg-transparent border-none cursor-pointer {{ request()->routeIs('plantes.*') ? 'font-semibold border-b-2 border-olive' : '' }}"
                            aria-expanded="false"
                            aria-haspopup="true"
                            id="plantes-menu-btn"
                            aria-controls="plantes-menu">
                            Nos plantes
                            <svg class="dropdown-arrow w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="plantes-menu" class="dropdown-menu absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-lg opacity-0 invisible transition-all duration-300 z-50" role="menu" aria-labelledby="plantes-menu-btn">
                            <a href="{{ route('plantes.catalogue') }}?categorie=cactus" class="block px-4 py-2 text-black hover:bg-gray-100 rounded-t-lg focus:bg-gray-100 focus:outline-none" role="menuitem">Cactus</a>
                            <a href="{{ route('plantes.catalogue') }}?categorie=succulentes" class="block px-4 py-2 text-black hover:bg-gray-100 focus:bg-gray-100 focus:outline-none" role="menuitem">Succulentes</a>
                            <a href="{{ route('plantes.catalogue') }}?categorie=diverses" class="block px-4 py-2 text-black hover:bg-gray-100 rounded-b-lg focus:bg-gray-100 focus:outline-none" role="menuitem">Plantes Diverses</a>
                        </div>
                    </div>

                    <a href="{{ route('galerie') }}" class="nav-link transition-colors duration-300 {{ request()->routeIs('galerie') ? 'font-semibold border-b-2 border-olive' : '' }}">Galerie</a>

                    <!-- Dropdown Services -->
                    <div class="relative dropdown-container">
                        <button
                            class="nav-link transition-colors duration-300 flex items-center gap-1 bg-transparent border-none cursor-pointer {{ request()->routeIs('services', 'amenagement', 'location') ? 'font-semibold border-b-2 border-olive' : '' }}"
                            aria-expanded="false"
                            aria-haspopup="true"
                            id="services-menu-btn"
                            aria-controls="services-menu">
                            Services
                            <svg class="dropdown-arrow w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="services-menu" class="dropdown-menu absolute left-0 mt-2 w-56 bg-white shadow-lg rounded-lg opacity-0 invisible transition-all duration-300 z-50" role="menu" aria-labelledby="services-menu-btn">
                            <a href="{{ route('amenagement') }}" class="block px-4 py-2 text-black hover:bg-gray-100 rounded-t-lg focus:bg-gray-100 focus:outline-none" role="menuitem">Aménagement</a>
                            <a href="{{ route('services') }}#entretien" class="block px-4 py-2 text-black hover:bg-gray-100 focus:bg-gray-100 focus:outline-none" role="menuitem">Entretien jardin ou plantes</a>
                            <a href="{{ route('location') }}" class="block px-4 py-2 text-black hover:bg-gray-100 rounded-b-lg focus:bg-gray-100 focus:outline-none" role="menuitem">Location de plante</a>
                        </div>
                    </div>

                    <a href="{{ route('a-propos') }}" class="nav-link transition-colors duration-300 {{ request()->routeIs('a-propos') ? 'font-semibold border-b-2 border-olive' : '' }}">À propos</a>
                    <a href="{{ route('contact') }}" class="nav-link transition-colors duration-300 {{ request()->routeIs('contact') ? 'font-semibold border-b-2 border-olive' : '' }}">Contact</a>
                </div>
                <!-- Bouton hamburger mobile -->
                <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg hover:bg-white/10 transition-colors duration-300" aria-label="Menu de navigation" aria-expanded="false" aria-controls="mobile-menu">
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
                <!-- Dropdown Nos plantes mobile -->
                <div class="mobile-dropdown">
                    <button class="mobile-dropdown-btn w-full flex items-center justify-between px-3 py-2 rounded-md text-black hover:bg-gray-100 transition-colors duration-300" aria-expanded="false" aria-controls="mobile-dropdown-plantes">
                        <span>Nos plantes</span>
                        <svg class="mobile-dropdown-icon w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="mobile-dropdown-plantes" class="mobile-dropdown-content hidden pl-6 space-y-1 mt-1">
                        <a href="{{ route('plantes.catalogue') }}" class="mobile-nav-link block px-3 py-2 rounded-md text-black hover:bg-gray-100 transition-colors duration-300">Tous les produits</a>
                        <a href="{{ route('plantes.catalogue') }}?categorie=cactus" class="mobile-nav-link block px-3 py-2 rounded-md text-black hover:bg-gray-100 transition-colors duration-300">Cactus</a>
                        <a href="{{ route('plantes.catalogue') }}?categorie=succulentes" class="mobile-nav-link block px-3 py-2 rounded-md text-black hover:bg-gray-100 transition-colors duration-300">Succulentes</a>
                        <a href="{{ route('plantes.catalogue') }}?categorie=diverses" class="mobile-nav-link block px-3 py-2 rounded-md text-black hover:bg-gray-100 transition-colors duration-300">Plantes Diverses</a>
                    </div>
                </div>

                <a href="{{ route('galerie') }}" class="mobile-nav-link block px-3 py-2 rounded-md text-black hover:bg-gray-100 transition-colors duration-300 {{ request()->routeIs('galerie') ? 'bg-olive text-white font-semibold' : '' }}">Galerie</a>

                <!-- Dropdown Services mobile -->
                <div class="mobile-dropdown">
                    <button class="mobile-dropdown-btn w-full flex items-center justify-between px-3 py-2 rounded-md text-black hover:bg-gray-100 transition-colors duration-300" aria-expanded="false" aria-controls="mobile-dropdown-services">
                        <span>Services</span>
                        <svg class="mobile-dropdown-icon w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="mobile-dropdown-services" class="mobile-dropdown-content hidden pl-6 space-y-1 mt-1">
                        <a href="{{ route('services') }}" class="mobile-nav-link block px-3 py-2 rounded-md text-black hover:bg-gray-100 transition-colors duration-300">Tous les services</a>
                        <a href="{{ route('amenagement') }}" class="mobile-nav-link block px-3 py-2 rounded-md text-black hover:bg-gray-100 transition-colors duration-300">Aménagement</a>
                        <a href="{{ route('services') }}#entretien" class="mobile-nav-link block px-3 py-2 rounded-md text-black hover:bg-gray-100 transition-colors duration-300">Entretien jardin ou plantes</a>
                        <a href="{{ route('location') }}" class="mobile-nav-link block px-3 py-2 rounded-md text-black hover:bg-gray-100 transition-colors duration-300">Location de plante</a>
                    </div>
                </div>

                <a href="{{ route('a-propos') }}" class="mobile-nav-link block px-3 py-2 rounded-md text-black hover:bg-gray-100 transition-colors duration-300 {{ request()->routeIs('a-propos') ? 'bg-olive text-white font-semibold' : '' }}">À propos</a>
                <a href="{{ route('contact') }}" class="mobile-nav-link block px-3 py-2 rounded-md text-black hover:bg-gray-100 transition-colors duration-300 {{ request()->routeIs('contact') ? 'bg-olive text-white font-semibold' : '' }}">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Script pour gérer le changement de couleur de la navbar au scroll et le menu mobile -->
    <script>
        // Gestion de la barre d'annonce
        document.addEventListener('DOMContentLoaded', function() {
            const closePromoBtn = document.getElementById('close-promo-bar');

            // Fermer la barre d'annonce
            closePromoBtn.addEventListener('click', function() {
                document.documentElement.style.setProperty('--promo-bar-display', 'translateY(-100%)');
                document.documentElement.style.setProperty('--navbar-top', '0');
                sessionStorage.setItem('promoBarClosed', 'true');
            });
        });

        // Gestion des dropdowns desktop au clavier
        document.addEventListener('DOMContentLoaded', function() {
            const dropdownButtons = document.querySelectorAll('[aria-haspopup="true"]');

            dropdownButtons.forEach(button => {
                const menu = document.getElementById(button.getAttribute('aria-controls'));
                const container = button.closest('.dropdown-container');
                const arrow = button.querySelector('.dropdown-arrow');
                const menuItems = menu.querySelectorAll('[role="menuitem"]');
                let isOpen = false;

                // Ouvrir/fermer avec Enter, Espace ou flèche bas
                button.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter' || e.key === ' ' || e.key === 'ArrowDown') {
                        e.preventDefault();
                        if (!isOpen || e.key === 'ArrowDown') {
                            openDropdown();
                            if (e.key === 'ArrowDown') {
                                menuItems[0]?.focus();
                            }
                        } else {
                            closeDropdown();
                        }
                    } else if (e.key === 'Escape' && isOpen) {
                        closeDropdown();
                    }
                });

                // Ouvrir au hover
                container.addEventListener('mouseenter', openDropdown);
                container.addEventListener('mouseleave', closeDropdown);

                // Navigation avec flèches dans le menu
                menuItems.forEach((item, index) => {
                    item.addEventListener('keydown', function(e) {
                        if (e.key === 'ArrowDown') {
                            e.preventDefault();
                            const nextItem = menuItems[index + 1] || menuItems[0];
                            nextItem.focus();
                        } else if (e.key === 'ArrowUp') {
                            e.preventDefault();
                            if (index === 0) {
                                button.focus();
                                closeDropdown();
                            } else {
                                menuItems[index - 1].focus();
                            }
                        } else if (e.key === 'Escape') {
                            closeDropdown();
                        } else if (e.key === 'Tab') {
                            if (!e.shiftKey && index === menuItems.length - 1) {
                                closeDropdown();
                            }
                        }
                    });
                });

                function openDropdown() {
                    isOpen = true;
                    menu.classList.remove('opacity-0', 'invisible');
                    menu.classList.add('opacity-100', 'visible');
                    arrow.style.transform = 'rotate(180deg)';
                    button.setAttribute('aria-expanded', 'true');
                }

                function closeDropdown() {
                    isOpen = false;
                    menu.classList.add('opacity-0', 'invisible');
                    menu.classList.remove('opacity-100', 'visible');
                    arrow.style.transform = 'rotate(0deg)';
                    button.setAttribute('aria-expanded', 'false');
                    button.focus();
                }

                // Fermer si clic en dehors
                document.addEventListener('click', function(e) {
                    if (isOpen && !container.contains(e.target)) {
                        closeDropdown();
                    }
                });
            });
        });

        // Gestion du scroll pour changer la couleur de la navbar
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            const navLinks = document.querySelectorAll('.nav-link');
            const scrollPosition = window.scrollY;

            // Après 50px de scroll, la navbar devient blanche opaque avec texte noir et bordure
            if (scrollPosition > 50) {
                navbar.classList.add('bg-white', 'border-b', 'border-gray-200');
                navbar.classList.remove('bg-transparent');
            } else {
                // Avant 50px, navbar transparente avec texte noir
                navbar.classList.add('bg-transparent');
                navbar.classList.remove('bg-white', 'border-b', 'border-gray-200');
            }
        });

        // Initialiser l'état au chargement de la page
        document.addEventListener('DOMContentLoaded', function() {

            // Gestion du menu hamburger mobile
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            const closeIcon = document.getElementById('close-icon');

            mobileMenuBtn.addEventListener('click', function() {
                const isExpanded = mobileMenu.classList.contains('hidden');

                // Toggle du menu
                mobileMenu.classList.toggle('hidden');

                // Mise à jour de l'attribut aria-expanded
                this.setAttribute('aria-expanded', isExpanded);

                // Toggle des icônes hamburger / close
                hamburgerIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });

            // Gestion des dropdowns mobiles
            const mobileDropdownBtns = document.querySelectorAll('.mobile-dropdown-btn');
            mobileDropdownBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const dropdown = this.parentElement;
                    const content = dropdown.querySelector('.mobile-dropdown-content');
                    const icon = dropdown.querySelector('.mobile-dropdown-icon');
                    const isExpanded = !content.classList.contains('hidden');

                    // Fermer tous les autres dropdowns
                    mobileDropdownBtns.forEach(otherBtn => {
                        if (otherBtn !== btn) {
                            const otherDropdown = otherBtn.parentElement;
                            const otherContent = otherDropdown.querySelector('.mobile-dropdown-content');
                            const otherIcon = otherDropdown.querySelector('.mobile-dropdown-icon');

                            otherContent.classList.add('hidden');
                            otherIcon.classList.remove('rotate-180');
                            otherBtn.setAttribute('aria-expanded', 'false');
                        }
                    });

                    // Toggle du contenu
                    content.classList.toggle('hidden');

                    // Rotation de l'icône
                    icon.classList.toggle('rotate-180');

                    // Mise à jour de l'attribut aria-expanded
                    this.setAttribute('aria-expanded', !isExpanded);
                });
            });

            // Fermer le menu mobile lors du clic sur un lien
            const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
            mobileNavLinks.forEach(link => {
                link.addEventListener('click', function() {
                    mobileMenu.classList.add('hidden');
                    hamburgerIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                    mobileMenuBtn.setAttribute('aria-expanded', 'false');
                });
            });

            // Focus trap pour le menu mobile
            function trapFocus(event) {
                const isMenuOpen = !mobileMenu.classList.contains('hidden');

                if (!isMenuOpen) return;

                // Récupérer tous les éléments focusables dans le menu
                const focusableElements = mobileMenu.querySelectorAll(
                    'a[href]:not([disabled]), button:not([disabled]), [tabindex]:not([tabindex="-1"])'
                );

                const firstElement = mobileMenuBtn; // Le bouton hamburger
                const lastElement = focusableElements[focusableElements.length - 1];

                // Si Tab est pressé
                if (event.key === 'Tab') {
                    // Shift+Tab (navigation arrière)
                    if (event.shiftKey) {
                        if (document.activeElement === firstElement) {
                            event.preventDefault();
                            lastElement.focus();
                        }
                    }
                    // Tab simple (navigation avant)
                    else {
                        if (document.activeElement === lastElement) {
                            event.preventDefault();
                            firstElement.focus();
                        }
                    }
                }

                // Fermer avec Escape
                if (event.key === 'Escape') {
                    mobileMenu.classList.add('hidden');
                    hamburgerIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                    mobileMenuBtn.setAttribute('aria-expanded', 'false');
                    mobileMenuBtn.focus();
                }
            }

            // Activer le focus trap quand le menu est ouvert
            document.addEventListener('keydown', trapFocus);

            // Donner le focus au premier élément du menu quand il s'ouvre
            const originalClickHandler = mobileMenuBtn.onclick;
            mobileMenuBtn.addEventListener('click', function() {
                // Attendre que le menu soit visible
                setTimeout(() => {
                    if (!mobileMenu.classList.contains('hidden')) {
                        // Focus sur le premier lien du menu
                        const firstLink = mobileMenu.querySelector('.mobile-dropdown-btn, .mobile-nav-link');
                        if (firstLink) {
                            firstLink.focus();
                        }
                    }
                }, 100);
            });
        });
    </script>

    <!-- Contenu principal -->
    <main id="main-content" role="main" tabindex="-1">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-olive text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h4 class="text-xl font-bold mb-4">August Cactus</h4>
                    <p class="text-gray-200">Votre pépinière de confiance depuis 30 ans</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Navigation</h4>
                    <ul class="space-y-2 text-gray-200">
                        <li><a href="{{ route('index') }}" class="hover:text-white transition-colors">Accueil</a></li>
                        <li><a href="{{ route('plantes.catalogue') }}" class="hover:text-white transition-colors">Nos plantes</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-white transition-colors">Services</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Informations</h4>
                    <ul class="space-y-2 text-gray-200">
                        <li><a href="{{ route('a-propos') }}" class="hover:text-white transition-colors">À propos</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">CGV</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Mentions légales</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Suivez-nous</h4>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/Cactus972/?locale=fr_FR" target="_blank" rel="noopener noreferrer" class="text-gray-200 hover:text-white transition-colors" aria-label="Facebook">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="https://www.instagram.com/echinofo/" target="_blank" rel="noopener noreferrer" class="text-gray-200 hover:text-white transition-colors" aria-label="Instagram">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-600 mt-8 pt-8 text-center text-gray-200">
                <p>&copy; 2025 August Cactus. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    @yield('scripts')

</body>
</html>
