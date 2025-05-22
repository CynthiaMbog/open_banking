<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AccueilController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/accueil', function () {
    return view('accueil'); // ou le nom exact de ton Blade
})->name('accueil');


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');


Route::get('/', function () {
    return view('index');
})->middleware('auth')->name('index');



Route::get('/payment', function () {
    return view('auth.payment');
})->name('payment');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');


Route::get('/services', function () {
    return view('services');
})->name('services');

// Route pour afficher le formulaire de connexion
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');

// Route pour gérer la soumission du formulaire de connexion
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

// Route pour gérer la déconnexion
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Route pour afficher le tableau de bord après connexion
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes protégées pour gérer les profils
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route d'inscription
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Route de succès d'inscription
Route::get('/inscription-reussie', function () {
    return view('auth.inscription-reussie');
})->name('inscription.success');

require __DIR__.'/auth.php';
