<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PlanteController;

// Routes PageController
Route::get('/', [PageController::class, 'index'])->name('index'); //page d'accueil
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/galerie', [PageController::class, 'galerie'])->name('galerie');
Route::get('/a-propos', [PageController::class, 'aPropos'])->name('a-propos');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Routes PlanteController
Route::get('/nos-plantes', [PlanteController::class, 'catalogue'])->name('plantes.catalogue');
Route::get('/nos-plantes/{plante}', [PlanteController::class, 'show'])->name('plantes.show');
