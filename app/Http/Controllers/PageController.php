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
        return view('layouts.accueil');
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
        return view('layouts.nos-plantes');
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
}
