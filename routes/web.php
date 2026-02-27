<?php

use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jeuController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\TaskController;

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Optionnel : Rediriger la racine vers home
Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/products',[ProductController::class, 'index'] )->name('products');

Route::get('/product/detail/{id}', [ ProductController::class, 'show'])->name('show');

Route::get('/product/ajouter', [ ProductController::class, 'create'])->name('ajouter');
Route::get('/product/store', [ProductController::class, 'store'])->name('store');
Route::get('/etudiant/add', [ProductController::class, 'add'])->name('add');
Route::get('/etudiant/store', [ProductController::class, 'storeEtudiant'])->name('storeEtudiant');
Route::get('/compte', [ProductController::class, 'creerCompte'])->name('compte');
Route::get('/compte/store', [ProductController::class, 'storeCompte'])->name('storeCompte');





Route::get('/jeu', [jeuController::class , 'index']);
Route::get('/jeuList', [jeuController::class, 'Liste']);
Route::get('/jeuDetail', [jeuController::class, 'jeu']);

Route::get('/films', [FilmController::class, 'index'])->name('cinema.film');
Route::get('/film/{id}', [FilmController::class, 'show'])->name('cinema.show');




Route::get('/bonjour', function (){
    return '<h1>voici mon catalogue de jeux</h1>';
});


Route::resource('Livres', LivreController::class);

Route::get('/', [TaskController::class , 'index'])->name('tasks.index');
Route::post('/tasks', [TaskController::class , 'store'])->name('tasks.store');
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
Route::put('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');


Route::get('/annonce/dashboard', [AnnonceController::class, 'dashboard'])->name('annonce.dashboard');
Route::resource('annonce', AnnonceController::class);



