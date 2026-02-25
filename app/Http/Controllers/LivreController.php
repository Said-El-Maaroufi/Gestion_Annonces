<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    /**
     * Liste tous les livres.
     */
    public function index()
    {
        $Livres = Livre::all();
        return view('Livres.index', compact('Livres'));
    }

    /**
     * Affiche le formulaire de création.
     */
    public function create()
    {
        return view('Livres.create');
    }

    /**
     * Enregistre un nouveau livre.
     */
    public function store(Request $request)
    {
        // Validation directe
        $validated = $request->validate([
            'title' => 'required|string|max:100',
            'price' => 'required|numeric|min:0',
            'rate'  => 'required|integer|between:1,5',
        ]);

        Livre::create($validated);

        return redirect()->route('Livres.index')->with('status', 'Livre ajouté avec succès !');
    }

    /**
     * Affiche un livre spécifique.
     */
    public function show(Livre $livre)
    {
        // On passe l'objet $livre à la vue
        return view('Livres.show', compact('livre'));
    }

    /**
     * Formulaire d'édition (pré-rempli avec les données du livre).
     */
    public function edit(Livre $livre)
    {
        return view('Livres.edit', compact('livre'));
    }

    /**
     * Met à jour les données d'un livre existant.
     */
    public function update(Request $request, Livre $livre)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:100',
            'price' => 'required|numeric|min:0',
            'rate'  => 'required|integer|between:1,5',
        ]);

        $livre->update($validated);

        return redirect()->route('Livres.index')->with('status', 'Livre mis à jour !');
    }

    /**
     * Supprime un livre.
     */
    public function destroy(Livre $livre)
    {
        $livre->delete();
        return redirect()->route('Livres.index')->with('status', 'Livre supprimé.');
    }
}