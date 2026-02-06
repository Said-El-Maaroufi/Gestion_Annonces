<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jeuController;

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
Route::get('/etudiant/store/etudiant', [ProductController::class, 'storeEtudiant'])->name('storeEtudiant');




Route::get('/bonjour', function (){
    return '<h1>voici mon catalogue de jeux</h1>';
});


Route::get('/jeu', [jeuController::class , 'index']);
Route::get('/jeuList', [jeuController::class, 'Liste']);
Route::get('/jeuDetail', [jeuController::class, 'jeu']);



