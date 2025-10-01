<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Page d'accueil
     */
    public function accueil()
    {
        return view('pages.accueil');
    }

    /**
     * Page des services
     */
    public function services()
    {
        return view('pages.services');
    }

    /**
     * Page galerie
     */
    public function galerie()
    {
        return view('pages.galerie');
    }

    /**
     * Page nos plantes (catalogue)
     */
    public function nosPlantes()
    {
        return view('pages.nos-plantes');
    }

    /**
     * Page à propos
     */
    public function aPropos()
    {
        return view('pages.a-propos');
    }

    /**
     * Page contact
     */
    public function contact()
    {
        return view('pages.contact');
    }
}
