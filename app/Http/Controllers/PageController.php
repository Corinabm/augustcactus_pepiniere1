<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Page d'accueil
     */
    public function index()
    {
        return view('layouts.index');
    }

    /**
     * Page des services
     */
    public function services()
    {
        return view('layouts.services');
    }

    /**
     * Page galerie
     */
    public function galerie()
    {
        return view('layouts.galerie');
    }

    /**
     * Page nos plantes (catalogue)
     */
    public function nosPlantes()
    {
        return view('plantes.catalogue');
    }

    /**
     * Page à propos
     */
    public function aPropos()
    {
        return view('layouts.a-propos');
    }

    /**
     * Page contact
     */
    public function contact()
    {
        return view('layouts.contact');
    }

    /**
     * Traitement du formulaire de contact
     * Gère l'envoi du message avec validation et protection anti-spam
     */
    public function submitContact(Request $request)
    {
        // Protection anti-spam : Si le champ honeypot est rempli, c'est un bot
        // Les utilisateurs réels ne voient pas ce champ caché
        if ($request->filled('honeypot')) {
            return back()->with('error', 'Votre message n\'a pas pu être envoyé.');
        }

        // Validation des champs du formulaire
        // Vérifie que tous les champs requis sont présents et valides
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'sujet' => 'required|in:conseil,achat,autre',
            'message' => 'required|string|min:10|max:1000',
        ], [
            // Messages d'erreur personnalisés en français
            'nom.required' => 'Le nom est obligatoire.',
            'prenom.required' => 'Le prénom est obligatoire.',
            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'L\'email doit être valide.',
            'sujet.required' => 'Veuillez choisir un sujet.',
            'message.required' => 'Le message est obligatoire.',
            'message.min' => 'Le message doit contenir au moins 10 caractères.',
            'message.max' => 'Le message ne peut pas dépasser 1000 caractères.',
        ]);

        // TODO: Ici, vous pouvez :
        // 1. Envoyer un email avec Mail::to('augustcactus@gmail.com')->send(new ContactMail($validated));
        // 2. Enregistrer le message dans la base de données
        // 3. Envoyer une notification

        // Redirection avec message de succès
        return back()->with('success', 'Votre message a été envoyé avec succès ! Nous vous répondrons dans les plus brefs délais.');
    }
}
