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
        // 1. Création des 5 Catégories
        $categoriesData = [
            ['nom' => 'Cactus & Succulentes'],
            ['nom' => 'Plantes Fleuries'],
            ['nom' => 'Plantes d\'Intérieur Vertes'],
            ['nom' => 'Arbres et Arbustes'],
            ['nom' => 'Aromatiques & Herbes'],
        ];

        foreach ($categoriesData as $data) {
            Categorie::create($data);
        }

        // Récupération des IDs des catégories pour la liaison
        $cactiId = Categorie::where('nom', 'Cactus & Succulentes')->first()->id;
        $fleurieId = Categorie::where('nom', 'Plantes Fleuries')->first()->id;
        $interieurId = Categorie::where('nom', 'Plantes d\'Intérieur Vertes')->first()->id;
        $arbresId = Categorie::where('nom', 'Arbres et Arbustes')->first()->id;
        
        // 2. Création des 10 Plantes
        $plantesData = [
            // Cacti & Succulentes
            [
                'categorie_id' => $cactiId,
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
                'categorie_id' => $cactiId,
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
            // Plantes Fleuries
            [
                'categorie_id' => $fleurieId,
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
                'categorie_id' => $fleurieId,
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
            // Plantes d'Intérieur Vertes
            [
                'categorie_id' => $interieurId,
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
                'categorie_id' => $interieurId,
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
                'categorie_id' => $interieurId,
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
            // Arbres et Arbustes
            [
                'categorie_id' => $arbresId,
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
                'categorie_id' => $arbresId,
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
            // Une autre Succulente
            [
                'categorie_id' => $cactiId,
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
        ];

        foreach ($plantesData as $data) {
            Plante::create($data);
        }
    }
}
