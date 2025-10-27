@extends('layouts.app')

@section('title', 'Galerie - August Cactus')

@section('content')
<!-- Espacement pour la navbar fixe -->
<div class="pt-16 sm:pt-20"></div>

<main class="bg-gradient-to-b from-white to-gray-50 min-h-screen">
    <!-- Section Hero moderne -->
    <section class="relative bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 md:py-24">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-black mb-6 sm:mb-8 leading-tight">
                    Notre Galerie
                </h1>
                <p class="text-lg sm:text-xl md:text-2xl text-gray-600 font-light leading-relaxed">
                    Découvrez nos plus belles plantes et réalisations d'aménagement
                </p>
            </div>
        </div>
    </section>

    <!-- Section Galerie Simple et Moderne -->
    <section class="py-12 sm:py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Grille uniforme moderne -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6" id="gallery">
                @php
                    // Tableau des images de votre galerie
                    // Ajoutez vos images ici en remplaçant les chemins
                    $images = [
                        ['src' => 'images/galerie/image1.jpg', 'alt' => 'Cactus collection'],
                        ['src' => 'images/galerie/image2.jpg', 'alt' => 'Succulentes diverses'],
                        ['src' => 'images/galerie/image3.jpg', 'alt' => 'Aménagement paysager'],
                        ['src' => 'images/galerie/image4.jpg', 'alt' => 'Plantes grasses'],
                        ['src' => 'images/galerie/image5.jpg', 'alt' => 'Jardin zen'],
                        ['src' => 'images/galerie/image6.jpg', 'alt' => 'Collection de cactus'],
                        ['src' => 'images/galerie/image7.jpg', 'alt' => 'Terrasse végétalisée'],
                        ['src' => 'images/galerie/image8.jpg', 'alt' => 'Plantes d\'intérieur'],
                        // Ajoutez autant d'images que vous voulez...
                    ];
                @endphp

                @foreach($images as $index => $image)
                    <div class="gallery-item group relative overflow-hidden rounded-2xl cursor-pointer bg-gray-100 aspect-square"
                         onclick="openModal({{ $index }})"
                         data-index="{{ $index }}">
                        <!-- Image -->
                        <img src="{{ asset($image['src']) }}"
                             alt="{{ $image['alt'] }}"
                             class="w-full h-full object-cover"
                             loading="lazy">

                        <!-- Overlay au hover -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/0 to-black/0 opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <div class="absolute bottom-0 left-0 right-0 p-6 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                <div class="flex items-center justify-center">
                                    <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>

<!-- Modale moderne 2025 -->
<div id="imageModal" class="hidden fixed inset-0 z-[1000] bg-black/95 backdrop-blur-sm items-center justify-center">
    <!-- Bouton de fermeture moderne -->
    <button onclick="closeModal()"
            class="absolute top-6 right-6 sm:top-8 sm:right-8 w-12 h-12 sm:w-14 sm:h-14 bg-white/10 backdrop-blur-md rounded-full flex items-center justify-center text-white hover:bg-white/20 transition-all duration-300 z-[1001] group">
        <svg class="w-6 h-6 sm:w-7 sm:h-7 transform group-hover:rotate-90 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>

    <!-- Bouton précédent moderne -->
    <button onclick="changeImage(-1)"
            class="absolute left-4 sm:left-8 top-1/2 -translate-y-1/2 w-12 h-12 sm:w-14 sm:h-14 bg-white/10 backdrop-blur-md rounded-full flex items-center justify-center text-white hover:bg-white/20 transition-all duration-300 group">
        <svg class="w-6 h-6 sm:w-7 sm:h-7 transform group-hover:-translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
    </button>

    <!-- Contenu de la modale avec animation -->
    <div class="relative max-w-[90%] sm:max-w-[85%] max-h-[85%] flex items-center justify-center">
        <img id="modalImage"
             src=""
             alt="Image agrandie"
             class="max-w-full max-h-[85vh] rounded-2xl shadow-2xl object-contain">
    </div>

    <!-- Bouton suivant moderne -->
    <button onclick="changeImage(1)"
            class="absolute right-4 sm:right-8 top-1/2 -translate-y-1/2 w-12 h-12 sm:w-14 sm:h-14 bg-white/10 backdrop-blur-md rounded-full flex items-center justify-center text-white hover:bg-white/20 transition-all duration-300 group">
        <svg class="w-6 h-6 sm:w-7 sm:h-7 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
    </button>

    <!-- Compteur moderne -->
    <div class="absolute bottom-6 sm:bottom-8 left-1/2 -translate-x-1/2 bg-white/10 backdrop-blur-md text-white px-6 py-3 rounded-full border border-white/20">
        <span class="text-base sm:text-lg font-medium">
            <span id="currentImage">1</span>
            <span class="mx-2 text-white/60">/</span>
            <span id="totalImages" class="text-white/80">16</span>
        </span>
    </div>
</div>
@endsection

@section('scripts')
<script>
    let currentIndex = 0;
    const images = document.querySelectorAll('#gallery img');
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    const currentImageSpan = document.getElementById('currentImage');
    const totalImagesSpan = document.getElementById('totalImages');

    // Mettre à jour le total d'images
    totalImagesSpan.textContent = images.length;

    // Ouvrir la modale avec animation
    function openModal(index) {
        currentIndex = index;
        showImage();
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';

        // Animation d'entrée
        setTimeout(() => {
            modalImage.style.opacity = '0';
            modalImage.style.transform = 'scale(0.9)';
            setTimeout(() => {
                modalImage.style.transition = 'all 0.4s ease-out';
                modalImage.style.opacity = '1';
                modalImage.style.transform = 'scale(1)';
            }, 10);
        }, 10);
    }

    // Fermer la modale avec animation
    function closeModal() {
        modalImage.style.opacity = '0';
        modalImage.style.transform = 'scale(0.95)';

        setTimeout(() => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = '';
            modalImage.style.transform = 'scale(1)';
        }, 300);
    }

    // Afficher l'image actuelle avec animation
    function showImage() {
        // Animation de transition
        modalImage.style.opacity = '0';
        modalImage.style.transform = 'scale(0.95)';

        setTimeout(() => {
            modalImage.src = images[currentIndex].src;
            currentImageSpan.textContent = currentIndex + 1;

            setTimeout(() => {
                modalImage.style.opacity = '1';
                modalImage.style.transform = 'scale(1)';
            }, 50);
        }, 200);
    }

    // Changer d'image (précédente ou suivante)
    function changeImage(direction) {
        currentIndex += direction;

        // Boucler au début ou à la fin
        if (currentIndex < 0) {
            currentIndex = images.length - 1;
        } else if (currentIndex >= images.length) {
            currentIndex = 0;
        }

        showImage();
    }

    // Navigation au clavier
    document.addEventListener('keydown', function(event) {
        if (modal.classList.contains('hidden')) return;

        if (event.key === 'ArrowLeft') {
            changeImage(-1);
        } else if (event.key === 'ArrowRight') {
            changeImage(1);
        } else if (event.key === 'Escape') {
            closeModal();
        }
    });

    // Fermer la modale en cliquant à l'extérieur de l'image
    modal.addEventListener('click', function(event) {
        if (event.target === modal) {
            closeModal();
        }
    });

    // Animation au scroll pour les images de la galerie
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 50);
                imageObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observer toutes les images de la galerie
    document.querySelectorAll('.gallery-item').forEach((item, index) => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(30px)';
        item.style.transition = 'all 0.6s ease-out';
        imageObserver.observe(item);
    });
</script>
@endsection

@section('styles')
<style>
    /* Smooth scroll */
    html {
        scroll-behavior: smooth;
    }

    /* Animation pour la modale */
    #imageModal {
        animation: fadeIn 0.3s ease-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    /* Désactiver les animations sur les préférences utilisateur */
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
