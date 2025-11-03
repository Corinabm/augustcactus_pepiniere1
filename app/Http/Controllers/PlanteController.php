<?php

namespace App\Http\Controllers;

use App\Models\Plante;
use Illuminate\Http\Request;

class PlanteController extends Controller
{
    /**
     * Afficher la liste des plantes actives avec filtres
     */
    public function index(Request $request)
    {
        // Récuperer les plantes actives avec leur catégorie
        $query = Plante::where('est_actif', true)
                       ->with('categorie');

        // Initialisation des variables pour le titre et sous-titre
        $titre = 'Notre catalogue de plantes';
        $sousTitre = 'Des variétés soigneusement choisies pour embellir votre espace et leur facilité d\'entretien.';
        $categorieActive = null;

        // Filtrage par catégorie
        if ($request->filled('categorie')) {
            $categorie = strtolower($request->categorie);

            // Mapping des URLs vers les noms de catégories en base de données
            $categorieMapping = [
                'plante-du-mois' => 'Plante du mois',
                'cactus' => 'Cactus',
                'succulentes' => 'Succulentes',
                'diverses' => 'Plantes Diverses'
            ];

            // Titres et sous-titres personnalisés par catégorie
            $contenuMapping = [
                'plante-du-mois' => [
                    'titre' => 'Plante du mois',
                    'sousTitre' => 'Découvrez notre sélection du mois, une plante d\'exception choisie spécialement pour vous.'
                ],
                'cactus' => [
                    'titre' => 'Nos Cactus',
                    'sousTitre' => 'Découvrez notre collection de cactus, des plantes résistantes et fascinantes qui apportent une touche unique à votre intérieur.'
                ],
                'succulentes' => [
                    'titre' => 'Nos Succulentes',
                    'sousTitre' => 'Explorez notre sélection de succulentes, des plantes grasses faciles d\'entretien et décoratives pour tous les espaces.'
                ],
                'diverses' => [
                    'titre' => 'Nos Plantes Diverses',
                    'sousTitre' => 'Parcourez notre variété de plantes pour tous les goûts, des plantes fleuries aux plantes vertes d\'intérieur.'
                ]
            ];

            if (isset($categorieMapping[$categorie])) {
                $categorieActive = $categorie;
                $titre = $contenuMapping[$categorie]['titre'];
                $sousTitre = $contenuMapping[$categorie]['sousTitre'];

                $query->whereHas('categorie', function($q) use ($categorieMapping, $categorie) {
                    $q->where('nom', $categorieMapping[$categorie]);
                });
            }
        }

        // Filtrage par arrosage
        if ($request->filled('arrosage')) {
            $query->where('arrosage', $request->arrosage);
        }

        // Filtrage par exposition
        if ($request->filled('exposition')) {
            $query->where('exposition', $request->exposition);
        }

        // Pagination : 12 plantes par page
        $plantes = $query->paginate(12);

        return view('layouts.plantes.catalogue', compact('plantes', 'titre', 'sousTitre', 'categorieActive'));
    }

    /**
     * Afficher une plante spécifique
     */
    public function show(Plante $plante)
    {
        // Charge la catégorie et les photos de la plante
        $plante->load(['categorie', 'photos']);

        // Récupérer 4 plantes de la même catégorie (excluant la plante actuelle)
        $plantesLiees = Plante::where('categorie_id', $plante->categorie_id)
            ->where('id', '!=', $plante->id)
            ->where('est_actif', true)
            ->limit(4)
            ->get();

        // Si moins de 4 plantes, compléter avec d'autres plantes
        if ($plantesLiees->count() < 4) {
            $autresPlantes = Plante::where('categorie_id', '!=', $plante->categorie_id)
                ->where('id', '!=', $plante->id)
                ->where('est_actif', true)
                ->limit(4 - $plantesLiees->count())
                ->get();

            $plantesLiees = $plantesLiees->merge($autresPlantes);
        }

        return view('layouts.plantes.show', compact('plante', 'plantesLiees'));
    }
}
