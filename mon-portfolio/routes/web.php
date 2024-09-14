<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Ici, vous pouvez enregistrer les routes Web pour votre application. Ces
| routes sont chargées par le RouteServiceProvider dans un groupe qui
| contient le middleware "web". Créez quelque chose de génial !
|
*/

// Route vers la page d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route vers la page des projets
Route::get('/projets', [ProjetController::class, 'index'])->name('projets.index');

// Route vers la page de détails d'un projet spécifique (optionnelle)
Route::get('/projets/{id}', [ProjetController::class, 'show'])->name('projets.show');

// Routes pour le formulaire de contact
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
