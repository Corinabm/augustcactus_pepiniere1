<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>August Cactus - Pépinière</title>
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
</head>
<body class="bg-white text-olive">

    <!-- Barre d'annonce -->
    <div class="bg-yellow text-white py-2 text-center text-sm">
        <p>🌿 <b>Annonce</b> | Porte ouverte le jeudi 23 octobre 2025 de 9h00 à 12h00</p>
    </div>

    <!-- Navigation -->
    <nav class="bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0">
                    <h1 class="text-2xl font-bold text-olive">August Cactus</h1>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#" class="text-olive hover:text-yellow font-semibold">Accueil</a>
                    <a href="#" class="text-olive hover:text-yellow">Catalogue</a>
                    <a href="#" class="text-olive hover:text-yellow">Services</a>
                    <a href="#" class="text-olive hover:text-yellow">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Bannière Héros -->
    <section class="relative bg-gradient-to-r from-olive to-green-900 text-white py-32">
        <div class="absolute inset-0 opacity-10 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS13aWR0aD0iMSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmlkKSIvPjwvc3ZnPg==')]"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <h2 class="text-5xl md:text-6xl font-bold mb-6">Cultivez Votre Paradis Vert</h2>
                <p class="text-xl md:text-2xl mb-8 text-gray-200">Plus de 680 variétés de plantes pour embellir votre quotidien</p>
                <a href="#catalogue" class="inline-block bg-yellow text-olive px-8 py-4 rounded-lg font-bold text-lg hover:bg-yellow-400 transition duration-300 shadow-lg">
                    Découvrir nos plantes
                </a>
            </div>
        </div>
    </section>

    <!-- Section Services -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center mb-12 text-olive">Nos Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition duration-300">
                    <div class="w-16 h-16 bg-yellow rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-olive" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-olive">Aménagement Paysager</h3>
                    <p class="text-gray-600">Créez des espaces verts uniques avec nos experts en aménagement extérieur.</p>
                </div>

                <!-- Service 2 -->
                <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition duration-300">
                    <div class="w-16 h-16 bg-yellow rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-olive" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-olive">Location de Plantes</h3>
                    <p class="text-gray-600">Louez des plantes pour vos événements professionnels ou personnels.</p>
                </div>

                <!-- Service 3 -->
                <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition duration-300">
                    <div class="w-16 h-16 bg-yellow rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-olive" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-olive">Décoration Végétale</h3>
                    <p class="text-gray-600">Sublimez vos intérieurs avec nos compositions végétales sur mesure.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cartes de Confiance Glassmorphisme -->
    <section class="py-20 bg-gradient-to-br from-olive via-green-800 to-olive relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-10 left-10 w-72 h-72 bg-yellow rounded-full filter blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 bg-green-400 rounded-full filter blur-3xl"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Carte 1 -->
                <div class="backdrop-blur-md bg-white/10 rounded-2xl p-8 border border-white/20 shadow-2xl">
                    <div class="text-center">
                        <div class="text-5xl font-bold text-yellow mb-2">99%</div>
                        <p class="text-white text-lg">Clients Satisfaits</p>
                    </div>
                </div>

                <!-- Carte 2 -->
                <div class="backdrop-blur-md bg-white/10 rounded-2xl p-8 border border-white/20 shadow-2xl">
                    <div class="text-center">
                        <div class="text-5xl font-bold text-yellow mb-2">+680</div>
                        <p class="text-white text-lg">Variétés de Plantes</p>
                    </div>
                </div>

                <!-- Carte 3 -->
                <div class="backdrop-blur-md bg-white/10 rounded-2xl p-8 border border-white/20 shadow-2xl">
                    <div class="text-center">
                        <div class="text-5xl font-bold text-yellow mb-2">30 ans</div>
                        <p class="text-white text-lg">D'Expertise</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Catalogue -->
    <section id="catalogue" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center mb-4 text-olive">Découvrir Nos Plantes</h2>
            <p class="text-center text-gray-600 mb-12 text-lg">Une sélection de nos plus belles variétés</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <!-- Plante 1 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition duration-300">
                    <div class="h-64 bg-gradient-to-br from-green-200 to-green-400 flex items-center justify-center">
                        <svg class="w-32 h-32 text-olive opacity-50" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1.323l3.954 1.582 1.599-.8a1 1 0 01.894 1.79l-1.233.616 1.738 5.42a1 1 0 01-.285 1.05A3.989 3.989 0 0115 15a3.989 3.989 0 01-2.667-1.019 1 1 0 01-.285-1.05l1.715-5.349L11 6.477V16h2a1 1 0 110 2H7a1 1 0 110-2h2V6.477L6.237 7.582l1.715 5.349a1 1 0 01-.285 1.05A3.989 3.989 0 015 15a3.989 3.989 0 01-2.667-1.019 1 1 0 01-.285-1.05l1.738-5.42-1.233-.617a1 1 0 01.894-1.788l1.599.799L9 4.323V3a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-olive">Monstera Deliciosa</h3>
                        <p class="text-gray-600 mb-4">Plante d'intérieur</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-yellow">24,90€</span>
                            <span class="text-sm text-gray-500">En stock</span>
                        </div>
                    </div>
                </div>

                <!-- Plante 2 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition duration-300">
                    <div class="h-64 bg-gradient-to-br from-yellow-200 to-yellow-400 flex items-center justify-center">
                        <svg class="w-32 h-32 text-olive opacity-50" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1.323l3.954 1.582 1.599-.8a1 1 0 01.894 1.79l-1.233.616 1.738 5.42a1 1 0 01-.285 1.05A3.989 3.989 0 0115 15a3.989 3.989 0 01-2.667-1.019 1 1 0 01-.285-1.05l1.715-5.349L11 6.477V16h2a1 1 0 110 2H7a1 1 0 110-2h2V6.477L6.237 7.582l1.715 5.349a1 1 0 01-.285 1.05A3.989 3.989 0 015 15a3.989 3.989 0 01-2.667-1.019 1 1 0 01-.285-1.05l1.738-5.42-1.233-.617a1 1 0 01.894-1.788l1.599.799L9 4.323V3a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-olive">Cactus Golden Barrel</h3>
                        <p class="text-gray-600 mb-4">Plante grasse</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-yellow">18,50€</span>
                            <span class="text-sm text-gray-500">En stock</span>
                        </div>
                    </div>
                </div>

                <!-- Plante 3 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition duration-300">
                    <div class="h-64 bg-gradient-to-br from-blue-200 to-blue-400 flex items-center justify-center">
                        <svg class="w-32 h-32 text-olive opacity-50" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1.323l3.954 1.582 1.599-.8a1 1 0 01.894 1.79l-1.233.616 1.738 5.42a1 1 0 01-.285 1.05A3.989 3.989 0 0115 15a3.989 3.989 0 01-2.667-1.019 1 1 0 01-.285-1.05l1.715-5.349L11 6.477V16h2a1 1 0 110 2H7a1 1 0 110-2h2V6.477L6.237 7.582l1.715 5.349a1 1 0 01-.285 1.05A3.989 3.989 0 015 15a3.989 3.989 0 01-2.667-1.019 1 1 0 01-.285-1.05l1.738-5.42-1.233-.617a1 1 0 01.894-1.788l1.599.799L9 4.323V3a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-olive">Ficus Lyrata</h3>
                        <p class="text-gray-600 mb-4">Arbre d'intérieur</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-yellow">32,90€</span>
                            <span class="text-sm text-gray-500">En stock</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="#" class="inline-block bg-yellow text-olive px-10 py-4 rounded-lg font-bold text-lg hover:bg-yellow-400 transition duration-300 shadow-lg">
                    Explorez nos plantes
                </a>
            </div>
        </div>
    </section>

    <!-- Section Localisation -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center mb-12 text-olive">Où Nous Trouver</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Carte (placeholder) -->
                <div class="bg-gray-300 rounded-lg h-96 flex items-center justify-center">
                    <div class="text-center">
                        <svg class="w-16 h-16 text-gray-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <p class="text-gray-600 font-semibold">Carte interactive à venir</p>
                    </div>
                </div>

                <!-- Informations -->
                <div class="space-y-8">
                    <div>
                        <h3 class="text-2xl font-bold mb-4 text-olive flex items-center">
                            <svg class="w-6 h-6 mr-3 text-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Horaires d'ouverture
                        </h3>
                        <div class="space-y-2 text-gray-600 ml-9">
                            <p><span class="font-semibold">Lundi - Vendredi :</span> 9h00 - 18h30</p>
                            <p><span class="font-semibold">Samedi :</span> 9h00 - 17h00</p>
                            <p><span class="font-semibold">Dimanche :</span> Fermé</p>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-4 text-olive flex items-center">
                            <svg class="w-6 h-6 mr-3 text-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Adresse
                        </h3>
                        <p class="text-gray-600 ml-9">123 Route de la Pépinière<br>75001 Paris, France</p>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-4 text-olive flex items-center">
                            <svg class="w-6 h-6 mr-3 text-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            Contact
                        </h3>
                        <div class="space-y-2 text-gray-600 ml-9">
                            <p><span class="font-semibold">Téléphone :</span> +33 1 23 45 67 89</p>
                            <p><span class="font-semibold">Email :</span> contact@augustcactus.fr</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                        <li><a href="#" class="hover:text-yellow">Accueil</a></li>
                        <li><a href="#" class="hover:text-yellow">Catalogue</a></li>
                        <li><a href="#" class="hover:text-yellow">Services</a></li>
                        <li><a href="#" class="hover:text-yellow">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Informations</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:text-yellow">À propos</a></li>
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

</body>
</html>
