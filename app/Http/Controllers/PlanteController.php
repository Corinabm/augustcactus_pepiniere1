<?php

namespace App\Http\Controllers;

use App\Models\Plante;
use Illuminate\Http\Request;

class PlanteController extends Controller
{
    /**
     * Afficher la liste des plantes actives avec filtres et tri
     */
    public function catalogue(Request $request)
    {
        // Requête de base : plantes actives avec leur catégorie
        $query = Plante::where('est_actif', true)
                       ->with('categorie');

        // Filtrage par arrosage
        if ($request->filled('arrosage')) {
            $query->where('arrosage', $request->arrosage);
        }

        // Filtrage par exposition
        if ($request->filled('exposition')) {
            $query->where('exposition', $request->exposition);
        }

        // Gestion du paramètre 'filter' pour tri et filtrage par catégorie
        if ($request->filled('filter')) {
            $filter = $request->filter;

            // --- TRI PAR PRIX ---
            if ($filter === 'prix_asc') {
                // Tri par prix croissant (du moins cher au plus cher)
                $query->orderBy('prix', 'asc');
            } elseif ($filter === 'prix_desc') {
                // Tri par prix décroissant (du plus cher au moins cher)
                $query->orderBy('prix', 'desc');
            }
            // --- FILTRAGE PAR CATÉGORIE ---
            elseif ($filter === 'plantes_interieur') {
                // Filtre : Plantes d'intérieur vertes
                $query->whereHas('categorie', function($q) {
                    $q->where('nom', 'Plantes d\'intérieur vertes');
                });
            } elseif ($filter === 'cactus_succulentes') {
                // Filtre : Cactus & Succulentes
                $query->whereHas('categorie', function($q) {
                    $q->where('nom', 'Cactus & Succulentes');
                });
            } elseif ($filter === 'plantes_fleuries') {
                // Filtre : Plantes Fleuries
                $query->whereHas('categorie', function($q) {
                    $q->where('nom', 'Plantes Fleuries');
                });
            }
        }

        // Pagination : 12 plantes par page
        $plantes = $query->paginate(12);

        return view('layouts.plantes.catalogue', compact('plantes'));
    }

    /**
     * Afficher une plante spécifique
     */
    public function show(Plante $plante)
    {
        $plante->load(['categorie', 'photos']);

        return view('layouts.plantes.show', compact('plante'));
    }
}
