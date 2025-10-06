@extends('layouts.app')

@section('title', 'Galerie - August Cactus')

@section('content')
<!-- Espacement pour la navbar fixe -->
<div class="pt-24"></div>

<!-- Section Hero -->
<section class="relative bg-white py-12 sm:py-16 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-3 sm:mb-4 text-olive">Notre Galerie</h1>
        <p class="text-base sm:text-lg md:text-xl text-gray-600">Découvrez nos plus belles plantes et réalisations d’aménagement</p>
    </div>
</section>

<!-- Section Galerie -->
<section class="py-8 sm:py-12 md:py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Galerie Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 sm:gap-3 md:gap-4 auto-rows-[200px] sm:auto-rows-[220px] md:auto-rows-[250px]" id="gallery">
            @for ($i = 1; $i <= 16; $i++)
                <div class="relative overflow-hidden cursor-pointer shadow-lg bg-white" onclick="openModal({{ $i - 1 }})">
                    <img src="https://picsum.photos/400/300?random={{ $i }}"
                         alt="Image {{ $i }}"
                         class="w-full h-full object-cover"
                         loading="lazy">
                </div>
            @endfor
        </div>
    </div>
</section>

<!-- Modale -->
<div id="imageModal" class="hidden fixed inset-0 z-[1000] bg-black bg-opacity-90 items-center justify-center">
    <!-- Bouton de fermeture -->
    <button onclick="closeModal()" class="absolute top-3 right-3 sm:top-5 sm:right-10 text-white text-3xl sm:text-4xl font-bold hover:text-gray-300 transition-colors duration-300 z-[1001]">
        &times;
    </button>

    <!-- Bouton précédent -->
    <button onclick="changeImage(-1)" class="absolute left-2 sm:left-5 top-1/2 -translate-y-1/2 text-white text-2xl sm:text-4xl font-bold px-2 sm:px-4 py-1 sm:py-2 rounded bg-black bg-opacity-50 hover:bg-opacity-80 transition-all duration-300">
        &#10094;
    </button>

    <!-- Contenu de la modale -->
    <div class="relative max-w-[95%] sm:max-w-[90%] max-h-[90%] flex items-center justify-center px-4 sm:px-0">
        <img id="modalImage" src="" alt="Image agrandie" class="max-w-full max-h-[80vh] sm:max-h-[90vh] shadow-2xl">
    </div>

    <!-- Bouton suivant -->
    <button onclick="changeImage(1)" class="absolute right-2 sm:right-5 top-1/2 -translate-y-1/2 text-white text-2xl sm:text-4xl font-bold px-2 sm:px-4 py-1 sm:py-2 rounded bg-black bg-opacity-50 hover:bg-opacity-80 transition-all duration-300">
        &#10095;
    </button>

    <!-- Compteur d'images -->
    <div class="absolute bottom-3 sm:bottom-5 left-1/2 -translate-x-1/2 text-white text-sm sm:text-base bg-black bg-opacity-60 px-3 sm:px-4 py-1 sm:py-2 rounded-full">
        <span id="currentImage">1</span> / <span id="totalImages">16</span>
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

    // Mettre � jour le total d'images
    totalImagesSpan.textContent = images.length;

    // Ouvrir la modale
    function openModal(index) {
        currentIndex = index;
        showImage();
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden'; // Emp�cher le scroll de la page
    }

    // Fermer la modale
    function closeModal() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = ''; // R�activer le scroll de la page
    }

    // Afficher l'image actuelle
    function showImage() {
        modalImage.src = images[currentIndex].src;
        currentImageSpan.textContent = currentIndex + 1;
    }

    // Changer d'image (pr�c�dente ou suivante)
    function changeImage(direction) {
        currentIndex += direction;

        // Boucler au d�but ou � la fin
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

    // Fermer la modale en cliquant � l'ext�rieur de l'image
    modal.addEventListener('click', function(event) {
        if (event.target === modal) {
            closeModal();
        }
    });
</script>
@endsection
