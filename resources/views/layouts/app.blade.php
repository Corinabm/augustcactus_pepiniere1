<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'August Cactus - Pépinière')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"> <!--Le favicon principal au format .ico pour tous les navigateurs-->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}"> <!--Une alternative au format PNG pour les navigateurs modernes-->
    <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}"> <!--Pour les appareils Apple (iPhone, iPad)-->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Prévenir débordement horizontal sur tous écrans */
        html, body {
            overflow-x: hidden;
            max-width: 100vw;
        }

        body {
            font-family: 'Source Sans Pro', sans-serif;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
        }

        /* Assurer que tous les conteneurs respectent la largeur */
        * {
            box-sizing: border-box;
        }

        /* ===== IMAGES RESPONSIVE ===== */
        img {
            max-width: 100%;
            height: auto;
        }

        /* Logo navbar toujours visible */
        #navbar-logo {
            display: inline-block !important;
            opacity: 1 !important;
        }

        /* Navbar visible dès le chargement */
        #navbar {
            opacity: 1;
        }

        /* Transitions uniquement après le chargement */
        #navbar.loaded {
            transition: top 0.3s ease, background-color 0.3s ease, backdrop-filter 0.3s ease;
        }

        /* Images avec position absolute - pour sections index (services, catalogue) */
        a[class*="group"] img[class*="absolute"],
        .group img[class*="absolute"] {
            width: 100% !important;
            height: 100% !important;
            object-fit: cover !important;
            object-position: center !important;
        }

        /* Images - styles consolidés */
        .card img,
        .service-card img,
        .catalogue-card img,
        .plante-card img,
        .product-card img,
        .image-container img,
        .card-image img,
        .service-image img,
        .catalogue-image img,
        .aspect-square img,
        .aspect-video img,
        .aspect-portrait img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        /* Conteneurs d'images avec aspect ratio */
        .image-container,
        .card-image,
        .service-image,
        .catalogue-image,
        .aspect-square {
            width: 100%;
            aspect-ratio: 1 / 1;
            overflow: hidden;
            position: relative;
        }

        .aspect-video {
            aspect-ratio: 16 / 9;
            overflow: hidden;
        }

        .aspect-portrait {
            aspect-ratio: 3 / 4;
            overflow: hidden;
        }

        /* Note: .grid-cards et hero-image utilisent les utilities Tailwind dans le HTML */

        /* Lazy loading avec apparition progressive */
        img[loading="lazy"]:not(.loaded) {
            opacity: 0.5;
        }

        img[loading="lazy"].loaded {
            opacity: 1;
            transition: opacity 0.3s ease-in-out;
        }

        /* ===== NAVIGATION - SUPPRESSION BORDURES ===== */
        /* Suppression complète des bordures sur tous les éléments de navigation */
        nav *,
        nav *:hover,
        nav *:focus,
        nav *:active,
        .dropdown-menu *,
        .dropdown-menu *:hover,
        .dropdown-menu *:focus,
        .dropdown-menu *:active {
            outline: 0 !important;
            border: 0 !important;
            box-shadow: none !important;
            text-decoration: none !important;
            --tw-ring-shadow: 0 0 #0000 !important;
            --tw-shadow: 0 0 #0000 !important;
        }

        /* Bordure d'accessibilité pour navigation clavier uniquement */
        body.user-is-tabbing nav a:focus,
        body.user-is-tabbing nav button:focus,
        body.user-is-tabbing .dropdown-menu a:focus {
            outline: 2px solid #1A4B2E !important;
            outline-offset: 3px;
            border-radius: 6px;
        }

        /* Touch targets WCAG */
        .mobile-nav-link,
        .mobile-dropdown-btn {
            min-height: 44px;
        }

        /* ===== RESPONSIVE UNIQUEMENT DESKTOP ===== */
        @media (min-width: 768px) {
            #navbar.bg-transparent .nav-link {
                text-shadow: 0 0 8px rgba(255, 255, 255, 0.8);
            }
        }

        /* Skip link caché mais accessible au clavier */
        .skip-link {
            position: absolute;
            top: -40px;
            left: 0;
            background: #1A4B2E;
            color: white;
            padding: 8px;
            text-decoration: none;
            z-index: 100;
        }

        .skip-link:focus {
            top: 0;
        }
    </style>
    @yield('styles')
</head>
<body class="bg-white text-black">

    <!-- Skip link pour accessibilité -->
    <a href="#main-content" class="skip-link">Aller au contenu principal</a>

    <!-- Barre d'annonce -->
    <x-annonce-bar />

    <!-- Navigation fixe -->
    <nav id="navbar" class="fixed left-0 right-0 z-40">
        <div class="max-w-7xl mx-auto px-3 sm:px-4 md:px-6 lg:px-8">
            <div class="flex justify-between items-center h-14 sm:h-16 md:h-14">
                <div class="flex-shrink-0">
                    <a href="{{ route('index') }}" class="logo-link transition-transform duration-300 hover:scale-105">
                        <img id="navbar-logo" src="{{ asset('images/logo.png') }}" alt="August Cactus - Pépinière" class="h-10 sm:h-11 md:h-12 transition-all duration-300" width="58" height="36">
                    </a>
                </div>
                <!-- Menu desktop -->
                <div class="hidden md:flex space-x-4 lg:space-x-6 items-center">
                    <!-- Dropdown Nos plantes -->
                    <div class="relative dropdown-container">
                        <a
                            href="{{ route('plantes.catalogue') }}"
                            class="nav-link transition-colors duration-300 flex items-center gap-1 {{ request()->routeIs('plantes.*') ? 'font-semibold border-b-2 border-olive' : '' }}"
                            aria-expanded="false"
                            aria-haspopup="true"
                            id="plantes-menu-btn"
                            aria-controls="plantes-menu">
                            Nos plantes
                            <svg class="dropdown-arrow w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <!-- Dropdown menu -->
                        <div id="plantes-menu" class="dropdown-menu absolute left-0 mt-2 w-48 lg:w-52 bg-white shadow-xl border border-gray-100 rounded-xl opacity-0 invisible transition-all duration-300 z-50" role="menu" aria-labelledby="plantes-menu-btn">
                            <a href="{{ route('plantes.catalogue') }}?categorie=cactus" class="block px-4 py-2.5 md:py-3 text-sm md:text-base text-black hover:bg-olive/10 focus:bg-olive/10 focus:text-olive focus:outline-none transition-all duration-200" role="menuitem">Cactus</a>
                            <a href="{{ route('plantes.catalogue') }}?categorie=succulentes" class="block px-4 py-2.5 md:py-3 text-sm md:text-base text-black hover:bg-olive/10 focus:bg-olive/10 focus:text-olive focus:outline-none transition-all duration-200" role="menuitem">Succulentes</a>
                            <a href="{{ route('plantes.catalogue') }}?categorie=diverses" class="block px-4 py-2.5 md:py-3 text-sm md:text-base text-black hover:bg-olive/10 rounded-b-xl focus:bg-olive/10 focus:text-olive focus:outline-none transition-all duration-200" role="menuitem">Plantes Diverses</a>
                        </div>
                    </div>

                    <a href="{{ route('galerie') }}" class="nav-link transition-all duration-300 {{ request()->routeIs('galerie') ? 'font-semibold border-b-2 border-olive' : '' }}">Galerie</a>

                    <!-- Dropdown Services -->
                    <div class="relative dropdown-container">
                        <a
                            href="{{ route('services') }}"
                            class="nav-link transition-colors duration-300 flex items-center gap-1 {{ request()->routeIs('services', 'amenagement', 'location') ? 'font-semibold border-b-2 border-olive' : '' }}"
                            aria-expanded="false"
                            aria-haspopup="true"
                            id="services-menu-btn"
                            aria-controls="services-menu">
                            Services
                            <svg class="dropdown-arrow w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <!-- Dropdown menu -->
                        <div id="services-menu" class="dropdown-menu absolute left-0 mt-2 w-56 lg:w-60 bg-white shadow-xl border border-gray-100 rounded-xl opacity-0 invisible transition-all duration-300 z-50" role="menu" aria-labelledby="services-menu-btn">
                            <a href="{{ route('amenagement') }}" class="block px-4 py-2.5 md:py-3 text-sm md:text-base text-black hover:bg-olive/10 rounded-t-xl focus:bg-olive/10 focus:text-olive focus:outline-none transition-all duration-200" role="menuitem">Aménagement</a>
                            <a href="{{ route('entretien') }}#entretien" class="block px-4 py-2.5 md:py-3 text-sm md:text-base text-black hover:bg-olive/10 focus:bg-olive/10 focus:text-olive focus:outline-none transition-all duration-200" role="menuitem">Entretien jardin ou plantes</a>
                            <a href="{{ route('location') }}" class="block px-4 py-2.5 md:py-3 text-sm md:text-base text-black hover:bg-olive/10 rounded-b-xl focus:bg-olive/10 focus:text-olive focus:outline-none transition-all duration-200" role="menuitem">Location de plante</a>
                        </div>
                    </div>

                    <a href="{{ route('a-propos') }}" class="nav-link transition-all duration-300 {{ request()->routeIs('a-propos') ? 'font-semibold border-b-2 border-olive' : '' }}">À propos</a>
                    <a href="{{ route('contact') }}" class="nav-link transition-all duration-300 {{ request()->routeIs('contact') ? 'font-semibold border-b-2 border-olive' : '' }}">Contact</a>
                </div>
                <!-- Bouton hamburger mobile -->
                <button id="mobile-menu-btn" class="md:hidden p-1.5 sm:p-2 rounded-lg hover:bg-white/10 transition-colors duration-300" aria-label="Menu de navigation" aria-expanded="false" aria-controls="mobile-menu">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 nav-link" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path id="hamburger-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path id="close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
        <!-- Menu mobile -->
        <div id="mobile-menu" class="hidden md:hidden">
            <div class="px-3 sm:px-4 pt-2 sm:pt-3 pb-3 sm:pb-4 space-y-1 bg-white shadow-lg max-h-[calc(100vh-3.5rem)] sm:max-h-[calc(100vh-4rem)] overflow-y-auto">
                <!-- Dropdown Nos plantes mobile -->
                <div class="mobile-dropdown">
                    <button class="mobile-dropdown-btn w-full flex items-center justify-between px-3 sm:px-4 py-2.5 sm:py-3 rounded-lg text-sm sm:text-base text-black hover:bg-gray-100 active:bg-gray-200 transition-colors duration-300" aria-expanded="false" aria-controls="mobile-dropdown-plantes">
                        <span class="font-medium">Nos plantes</span>
                        <svg class="mobile-dropdown-icon w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="mobile-dropdown-plantes" class="mobile-dropdown-content hidden pl-4 sm:pl-6 space-y-0.5 mt-1">
                        <a href="{{ route('plantes.catalogue') }}" class="mobile-nav-link block px-3 sm:px-4 py-2 sm:py-2.5 rounded-lg text-sm sm:text-base text-gray-700 hover:bg-gray-100 active:bg-gray-200 transition-colors duration-300">Tous les produits</a>
                        <a href="{{ route('plantes.catalogue') }}?categorie=cactus" class="mobile-nav-link block px-3 sm:px-4 py-2 sm:py-2.5 rounded-lg text-sm sm:text-base text-gray-700 hover:bg-gray-100 active:bg-gray-200 transition-colors duration-300">Cactus</a>
                        <a href="{{ route('plantes.catalogue') }}?categorie=succulentes" class="mobile-nav-link block px-3 sm:px-4 py-2 sm:py-2.5 rounded-lg text-sm sm:text-base text-gray-700 hover:bg-gray-100 active:bg-gray-200 transition-colors duration-300">Succulentes</a>
                        <a href="{{ route('plantes.catalogue') }}?categorie=diverses" class="mobile-nav-link block px-3 sm:px-4 py-2 sm:py-2.5 rounded-lg text-sm sm:text-base text-gray-700 hover:bg-gray-100 active:bg-gray-200 transition-colors duration-300">Plantes Diverses</a>
                    </div>
                </div>

                <a href="{{ route('galerie') }}" class="mobile-nav-link block px-3 sm:px-4 py-2.5 sm:py-3 rounded-lg text-sm sm:text-base font-medium text-black hover:bg-gray-100 active:bg-gray-200 transition-colors duration-300 {{ request()->routeIs('galerie') ? 'bg-olive text-white font-semibold' : '' }}">Galerie</a>

                <!-- Dropdown Services mobile -->
                <div class="mobile-dropdown">
                    <button class="mobile-dropdown-btn w-full flex items-center justify-between px-3 sm:px-4 py-2.5 sm:py-3 rounded-lg text-sm sm:text-base text-black hover:bg-gray-100 active:bg-gray-200 transition-colors duration-300" aria-expanded="false" aria-controls="mobile-dropdown-services">
                        <span class="font-medium">Services</span>
                        <svg class="mobile-dropdown-icon w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="mobile-dropdown-services" class="mobile-dropdown-content hidden pl-4 sm:pl-6 space-y-0.5 mt-1">
                        <a href="{{ route('services') }}" class="mobile-nav-link block px-3 sm:px-4 py-2 sm:py-2.5 rounded-lg text-sm sm:text-base text-gray-700 hover:bg-gray-100 active:bg-gray-200 transition-colors duration-300">Tous les services</a>
                        <a href="{{ route('amenagement') }}" class="mobile-nav-link block px-3 sm:px-4 py-2 sm:py-2.5 rounded-lg text-sm sm:text-base text-gray-700 hover:bg-gray-100 active:bg-gray-200 transition-colors duration-300">Aménagement</a>
                        <a href="{{ route('entretien') }}#entretien" class="mobile-nav-link block px-3 sm:px-4 py-2 sm:py-2.5 rounded-lg text-sm sm:text-base text-gray-700 hover:bg-gray-100 active:bg-gray-200 transition-colors duration-300">Entretien jardin ou plantes</a>
                        <a href="{{ route('location') }}" class="mobile-nav-link block px-3 sm:px-4 py-2 sm:py-2.5 rounded-lg text-sm sm:text-base text-gray-700 hover:bg-gray-100 active:bg-gray-200 transition-colors duration-300">Location de plante</a>
                    </div>
                </div>

                <a href="{{ route('a-propos') }}" class="mobile-nav-link block px-3 sm:px-4 py-2.5 sm:py-3 rounded-lg text-sm sm:text-base font-medium text-black hover:bg-gray-100 active:bg-gray-200 transition-colors duration-300 {{ request()->routeIs('a-propos') ? 'bg-olive text-white font-semibold' : '' }}">À propos</a>
                <a href="{{ route('contact') }}" class="mobile-nav-link block px-3 sm:px-4 py-2.5 sm:py-3 rounded-lg text-sm sm:text-base font-medium text-black hover:bg-gray-100 active:bg-gray-200 transition-colors duration-300 {{ request()->routeIs('contact') ? 'bg-olive text-white font-semibold' : '' }}">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Script pour gérer le changement de couleur de la navbar au scroll et le menu mobile -->
    <script>
        // ===== DÉTECTION NAVIGATION CLAVIER (Accessibilité) =====
        // Ajoute la classe 'user-is-tabbing' uniquement si l'utilisateur utilise Tab
        function handleFirstTab(e) {
            if (e.key === 'Tab') {
                document.body.classList.add('user-is-tabbing');
                window.removeEventListener('keydown', handleFirstTab);
                window.addEventListener('mousedown', handleMouseDownOnce);
            }
        }

        function handleMouseDownOnce() {
            document.body.classList.remove('user-is-tabbing');
            window.removeEventListener('mousedown', handleMouseDownOnce);
            window.addEventListener('keydown', handleFirstTab);
        }

        window.addEventListener('keydown', handleFirstTab);

        // Gestion simple de la navbar
        function updateNavbarPosition() {
            const navbar = document.getElementById('navbar');
            const navbarLogo = document.getElementById('navbar-logo');
            const announcementBar = document.getElementById('announcement-bar');
            const scrollPosition = window.scrollY;

            if (!navbar) return;

            // Calculer la hauteur de la barre d'annonce si visible
            const announcementHeight = announcementBar && announcementBar.style.display !== 'none'
                ? announcementBar.offsetHeight
                : 0;

            // Au scroll, la navbar remonte
            if (scrollPosition > 10) {
                navbar.style.top = '0';
                navbar.classList.add('bg-white/80', 'backdrop-blur-md', 'shadow-sm');
                navbar.classList.remove('bg-transparent');
                if (navbarLogo) {
                    navbarLogo.classList.remove('h-10', 'sm:h-11', 'md:h-12');
                    navbarLogo.classList.add('h-9', 'sm:h-10', 'md:h-11');
                }
            } else {
                // En haut de page, navbar sous la barre d'annonce
                navbar.style.top = announcementHeight + 'px';
                navbar.classList.add('bg-transparent');
                navbar.classList.remove('bg-white/80', 'backdrop-blur-md', 'shadow-sm');
                if (navbarLogo) {
                    navbarLogo.classList.add('h-10', 'sm:h-11', 'md:h-12');
                    navbarLogo.classList.remove('h-9', 'sm:h-10', 'md:h-11');
                }
            }
        }

        // Initialisation - positionner immédiatement sans transition
        (function() {
            const navbar = document.getElementById('navbar');
            if (navbar) {
                // Positionner immédiatement AVANT d'activer les transitions
                updateNavbarPosition();

                // Activer les transitions APRÈS le positionnement initial
                setTimeout(function() {
                    navbar.classList.add('loaded');
                }, 50);
            }
        })();

        // Écouter le scroll
        window.addEventListener('scroll', updateNavbarPosition, { passive: true });

        // Écouter la fermeture de la barre d'annonce
        window.addEventListener('announcement-closed', function() {
            setTimeout(updateNavbarPosition, 10);
        });

        // Initialiser tout au chargement de la page
        document.addEventListener('DOMContentLoaded', function() {
            // Ré-initialiser la position de la navbar au cas où
            updateNavbarPosition();

            // ===== DROPDOWNS DESKTOP =====
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
                            closeDropdown(true);
                        }
                    } else if (e.key === 'Escape' && isOpen) {
                        closeDropdown(true);
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
                                closeDropdown(true);
                            } else {
                                menuItems[index - 1].focus();
                            }
                        } else if (e.key === 'Escape') {
                            closeDropdown(true);
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

                function closeDropdown(shouldFocus = false) {
                    isOpen = false;
                    menu.classList.add('opacity-0', 'invisible');
                    menu.classList.remove('opacity-100', 'visible');
                    arrow.style.transform = 'rotate(0deg)';
                    button.setAttribute('aria-expanded', 'false');
                    if (shouldFocus) {
                        button.focus();
                    }
                }

                // Fermer si clic en dehors
                document.addEventListener('click', function(e) {
                    if (isOpen && !container.contains(e.target)) {
                        closeDropdown();
                    }
                });
            });

            // ===== MENU MOBILE =====
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

                // Donner le focus au premier élément du menu quand il s'ouvre
                if (isExpanded) {
                    setTimeout(() => {
                        const firstLink = mobileMenu.querySelector('.mobile-dropdown-btn, .mobile-nav-link');
                        if (firstLink) {
                            firstLink.focus();
                        }
                    }, 100);
                }
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
            document.addEventListener('keydown', function(event) {
                const isMenuOpen = !mobileMenu.classList.contains('hidden');

                if (!isMenuOpen) return;

                // Récupérer tous les éléments focusables dans le menu
                const focusableElements = mobileMenu.querySelectorAll(
                    'a[href]:not([disabled]), button:not([disabled]), [tabindex]:not([tabindex="-1"])'
                );

                const firstElement = mobileMenuBtn;
                const lastElement = focusableElements[focusableElements.length - 1];

                // Si Tab est pressé
                if (event.key === 'Tab') {
                    if (event.shiftKey) {
                        if (document.activeElement === firstElement) {
                            event.preventDefault();
                            lastElement.focus();
                        }
                    } else {
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
            });

            // ===== LAZY LOADING IMAGES =====
            const lazyImages = document.querySelectorAll('img[loading="lazy"]');
            lazyImages.forEach(img => {
                if (img.complete) {
                    img.classList.add('loaded');
                } else {
                    img.addEventListener('load', function() {
                        this.classList.add('loaded');
                    });
                }
            });
        });
    </script>

    <!-- Contenu principal -->
    <main id="main-content" role="main" tabindex="-1">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-olive text-white py-8 sm:py-10 md:py-12 lg:py-16 relative overflow-hidden">
        <!-- Effet décoratif subtil -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-0 right-0 w-48 sm:w-64 md:w-96 h-48 sm:h-64 md:h-96 bg-white rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-48 sm:w-64 md:w-96 h-48 sm:h-64 md:h-96 bg-white rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 gap-6 sm:gap-8 lg:gap-12 mb-6 sm:mb-8 lg:mb-12">
                <!-- Branding Section -->
                <div class="sm:col-span-2 lg:col-span-4">
                    <div class="mb-3 sm:mb-4 md:mb-6">
                        <h3 class="text-xl sm:text-2xl md:text-3xl font-bold text-white mb-2 sm:mb-3 md:mb-4 font-serif">August Cactus - Pépinière</h3>
                    </div>
                    <p class="text-white/80 text-xs sm:text-sm leading-relaxed mb-4 sm:mb-5 md:mb-6 max-w-xs">
                        Votre pépinière de confiance depuis 30 ans. Spécialisés dans les cactus, succulentes et plantes diverses.
                    </p>
                    <div class="flex space-x-2.5 sm:space-x-3 mb-6 sm:mb-0">
                        <a href="https://www.facebook.com/Cactus972/?locale=fr_FR" target="_blank" rel="noopener noreferrer" class="w-9 h-9 sm:w-10 sm:h-10 bg-white/10 hover:bg-white/20 active:bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 active:scale-95" aria-label="Facebook">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="https://www.instagram.com/echinofo/" target="_blank" rel="noopener noreferrer" class="w-9 h-9 sm:w-10 sm:h-10 bg-white/10 hover:bg-white/20 active:bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 active:scale-95" aria-label="Instagram">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Navigation Links -->
                <div class="lg:col-span-3">
                    <h4 class="text-white font-semibold text-xs sm:text-sm uppercase tracking-wider mb-3 sm:mb-4">Navigation</h4>
                    <ul class="space-y-2 sm:space-y-2.5 md:space-y-3">
                        <li><a href="{{ route('index') }}" class="text-white/80 hover:text-white active:text-white/60 transition-colors duration-200 text-xs sm:text-sm inline-flex items-center group">
                            <span class="w-0 group-hover:w-2 h-0.5 bg-white transition-all duration-200 mr-0 group-hover:mr-2"></span>
                            Accueil
                        </a></li>
                        <li><a href="{{ route('plantes.catalogue') }}" class="text-white/80 hover:text-white active:text-white/60 transition-colors duration-200 text-xs sm:text-sm inline-flex items-center group">
                            <span class="w-0 group-hover:w-2 h-0.5 bg-white transition-all duration-200 mr-0 group-hover:mr-2"></span>
                            Nos plantes
                        </a></li>
                        <li><a href="{{ route('services') }}" class="text-white/80 hover:text-white active:text-white/60 transition-colors duration-200 text-xs sm:text-sm inline-flex items-center group">
                            <span class="w-0 group-hover:w-2 h-0.5 bg-white transition-all duration-200 mr-0 group-hover:mr-2"></span>
                            Services
                        </a></li>
                        <li><a href="{{ route('contact') }}" class="text-white/80 hover:text-white active:text-white/60 transition-colors duration-200 text-xs sm:text-sm inline-flex items-center group">
                            <span class="w-0 group-hover:w-2 h-0.5 bg-white transition-all duration-200 mr-0 group-hover:mr-2"></span>
                            Contact
                        </a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="lg:col-span-3">
                    <h4 class="text-white font-semibold text-xs sm:text-sm uppercase tracking-wider mb-3 sm:mb-4">Services</h4>
                    <ul class="space-y-2 sm:space-y-2.5 md:space-y-3">
                        <li><a href="{{ route('amenagement') }}" class="text-white/80 hover:text-white active:text-white/60 transition-colors duration-200 text-xs sm:text-sm inline-flex items-center group">
                            <span class="w-0 group-hover:w-2 h-0.5 bg-white transition-all duration-200 mr-0 group-hover:mr-2"></span>
                            Aménagement
                        </a></li>
                        <li><a href="{{ route('services') }}#entretien" class="text-white/80 hover:text-white active:text-white/60 transition-colors duration-200 text-xs sm:text-sm inline-flex items-center group">
                            <span class="w-0 group-hover:w-2 h-0.5 bg-white transition-all duration-200 mr-0 group-hover:mr-2"></span>
                            Entretien
                        </a></li>
                        <li><a href="{{ route('location') }}" class="text-white/80 hover:text-white active:text-white/60 transition-colors duration-200 text-xs sm:text-sm inline-flex items-center group">
                            <span class="w-0 group-hover:w-2 h-0.5 bg-white transition-all duration-200 mr-0 group-hover:mr-2"></span>
                            Location
                        </a></li>
                    </ul>
                </div>

                <!-- Informations -->
                <div class="lg:col-span-2">
                    <h4 class="text-white font-semibold text-xs sm:text-sm uppercase tracking-wider mb-3 sm:mb-4">Légal</h4>
                    <ul class="space-y-2 sm:space-y-2.5 md:space-y-3">
                        <li><a href="{{ route('a-propos') }}" class="text-white/80 hover:text-white active:text-white/60 transition-colors duration-200 text-xs sm:text-sm inline-flex items-center group">
                            <span class="w-0 group-hover:w-2 h-0.5 bg-white transition-all duration-200 mr-0 group-hover:mr-2"></span>
                            À propos
                        </a></li>
                        <li><a href="#" class="text-white/80 hover:text-white active:text-white/60 transition-colors duration-200 text-xs sm:text-sm inline-flex items-center group">
                            <span class="w-0 group-hover:w-2 h-0.5 bg-white transition-all duration-200 mr-0 group-hover:mr-2"></span>
                            CGV
                        </a></li>
                        <li><a href="#" class="text-white/80 hover:text-white active:text-white/60 transition-colors duration-200 text-xs sm:text-sm inline-flex items-center group">
                            <span class="w-0 group-hover:w-2 h-0.5 bg-white transition-all duration-200 mr-0 group-hover:mr-2"></span>
                            Mentions légales
                        </a></li>
                    </ul>
                </div>
            </div>

            <!-- Séparateur subtil -->
            <div class="h-px bg-gradient-to-r from-transparent via-white/20 to-transparent mb-4 sm:mb-6 md:mb-8"></div>

            <!-- Copyright -->
            <div class="flex justify-center items-center text-xs sm:text-sm text-white/60">
                <p>&copy; 2025 August Cactus. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    @yield('scripts')

</body>
</html>
