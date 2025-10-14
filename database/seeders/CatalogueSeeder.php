<?php

namespace Database\Seeders;

use App\Models\Plante;
use App\Models\Categorie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CatalogueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Création des 3 Catégories
        $categoriesData = [
            ['nom' => 'Cactus'],
            ['nom' => 'Succulentes'],
            ['nom' => 'Plantes Diverses'],
        ];

        foreach ($categoriesData as $data) {
            Categorie::create($data);
        }

        // Récupération des IDs des catégories pour la liaison
        $cactusId = Categorie::where('nom', 'Cactus')->first()->id;
        $succulentesId = Categorie::where('nom', 'Succulentes')->first()->id;
        $diversesId = Categorie::where('nom', 'Plantes Diverses')->first()->id;
        
        // 2. Création des 10 Plantes
        $plantesData = [
            // Cactus
            [
                'categorie_id' => $cactusId,
                'nom_commun' => 'Cactus Ourson',
                'nom_scientifique' => 'Mammillaria Elongata',
                'description' => 'Un cactus sans épines agressives, ressemblant à une petite patte d\'ours.',
                'prix' => 12.00,
                'taille' => 'petit',
                'exposition' => 'soleil',
                'arrosage' => 'faible',
                'stock' => 25,
                'est_actif' => true,
            ],
            // Succulentes
            [
                'categorie_id' => $succulentesId,
                'nom_commun' => 'Echeveria Perle',
                'nom_scientifique' => 'Echeveria Elegans',
                'description' => 'Une succulente populaire en forme de rosette, facile d\'entretien et parfaite pour les débutants.',
                'prix' => 8.50,
                'taille' => 'petit',
                'exposition' => 'soleil',
                'arrosage' => 'faible',
                'stock' => 50,
                'est_actif' => true,
            ],
            [
                'categorie_id' => $succulentesId,
                'nom_commun' => 'Aloe Vera',
                'nom_scientifique' => 'Aloe Barbadensis Miller',
                'description' => 'Une plante médicinale aux feuilles charnues, utile pour les brûlures et décorative.',
                'prix' => 14.99,
                'taille' => 'moyen',
                'exposition' => 'soleil',
                'arrosage' => 'faible',
                'stock' => 40,
                'est_actif' => true,
            ],
            // Plantes Diverses
            [
                'categorie_id' => $diversesId,
                'nom_commun' => 'Orchidée Phalaenopsis',
                'nom_scientifique' => 'Phalaenopsis spp.',
                'description' => 'La reine des plantes d\'intérieur, avec ses fleurs élégantes et durables.',
                'prix' => 35.99,
                'taille' => 'moyen',
                'exposition' => 'mi-ombre',
                'arrosage' => 'modere',
                'stock' => 15,
                'est_actif' => true,
            ],
            [
                'categorie_id' => $diversesId,
                'nom_commun' => 'Anthurium Rouge',
                'nom_scientifique' => 'Anthurium Andraeanum',
                'description' => 'Plante tropicale aux feuilles en forme de cœur et aux spathes rouges brillantes.',
                'prix' => 22.50,
                'taille' => 'moyen',
                'exposition' => 'ombre',
                'arrosage' => 'regulier',
                'stock' => 18,
                'est_actif' => true,
            ],
            [
                'categorie_id' => $diversesId,
                'nom_commun' => 'Monstera Deliciosa',
                'nom_scientifique' => 'Monstera Deliciosa',
                'description' => 'La plante star des réseaux sociaux, avec ses grandes feuilles découpées.',
                'prix' => 45.00,
                'taille' => 'grand',
                'exposition' => 'mi-ombre',
                'arrosage' => 'modere',
                'stock' => 10,
                'est_actif' => true,
            ],
            [
                'categorie_id' => $diversesId,
                'nom_commun' => 'Ficus Lyrata',
                'nom_scientifique' => 'Ficus Lyrata',
                'description' => 'Le figuier lyre, connu pour ses feuilles en forme de violon. Demande de la lumière indirecte.',
                'prix' => 55.00,
                'taille' => 'grand',
                'exposition' => 'soleil',
                'arrosage' => 'modere',
                'stock' => 8,
                'est_actif' => true,
            ],
            [
                'categorie_id' => $diversesId,
                'nom_commun' => 'Pothos Doré',
                'nom_scientifique' => 'Epipremnum Aureum',
                'description' => 'Plante grimpante ou retombante très robuste, idéale pour purifier l\'air.',
                'prix' => 15.99,
                'taille' => 'petit',
                'exposition' => 'ombre',
                'arrosage' => 'faible',
                'stock' => 30,
                'est_actif' => true,
            ],
            [
                'categorie_id' => $diversesId,
                'nom_commun' => 'Olivier d\'Intérieur',
                'nom_scientifique' => 'Olea Europaea',
                'description' => 'Un petit olivier pour un air de Provence sur votre balcon ou dans votre salon.',
                'prix' => 75.00,
                'taille' => 'grand',
                'exposition' => 'soleil',
                'arrosage' => 'modere',
                'stock' => 5,
                'est_actif' => true,
            ],
            [
                'categorie_id' => $diversesId,
                'nom_commun' => 'Bonsaï Ficus',
                'nom_scientifique' => 'Ficus Retusa',
                'description' => 'Un bonsaï facile à entretenir, avec un tronc épais et des racines aériennes.',
                'prix' => 60.00,
                'taille' => 'moyen',
                'exposition' => 'mi-ombre',
                'arrosage' => 'regulier',
                'stock' => 12,
                'est_actif' => true,
            ],
        ];

        foreach ($plantesData as $data) {
            Plante::create($data);
        }
    }
}
