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

        // Tri par prix
        if ($request->filled('prix')) {
            if ($request->prix === 'asc') {
                $query->orderBy('prix', 'asc');
            } elseif ($request->prix === 'desc') {
                $query->orderBy('prix', 'desc');
            }
        }

        $plantes = $query->paginate(12);

        return view('pages.plantes.index', compact('plantes'));
    }

    /**
     * Afficher une plante spécifique
     */
    public function show(Plante $plante)
    {
        $plante->load(['categorie', 'photos']);

        return view('pages.plantes.show', compact('plante'));
    }
}
