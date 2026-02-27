<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnnonceController extends Controller
{
    public function index() {
        $annonces = Annonce::latest()->get();
        return view('annonce.index', compact('annonces'));
    }

    public function create() {
        return view('annonce.create');
    }

    public function store(Request $request) {
        $request->validate([
            'titre' => 'required',
            'type' => 'required',
            'prix' => 'required|numeric',
            'photo' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('annonces', 'public');
        }

        Annonce::create($data);
        return redirect()->route('annonce.index')->with('success', 'Annonce créée avec succès !');
    }

    public function show(Annonce $Annonce) { // Note: Majuscule car ta route est 'Annonce'
        return view('annonce.show', compact('Annonce'));
    }

    public function edit(Annonce $Annonce) {
        return view('annonce.edit', compact('Annonce'));
    }

    public function update(Request $request, Annonce $Annonce) {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            if($Annonce->photo) Storage::disk('public')->delete($Annonce->photo);
            $data['photo'] = $request->file('photo')->store('annonces', 'public');
        }
        $Annonce->update($data);
        return redirect()->route('annonce.index')->with('success', 'Annonce mise à jour !');
    }

    public function destroy(Annonce $Annonce) {
        if($Annonce->photo) Storage::disk('public')->delete($Annonce->photo);
        $Annonce->delete();
        return redirect()->route('annonce.index')->with('success', 'Annonce supprimée !');
    }

    public function dashboard()
{
    $stats = [
        'total'        => \App\Models\Annonce::count(),
        'prix_total'   => \App\Models\Annonce::sum('prix'),
        'prix_moyen'   => \App\Models\Annonce::avg('prix'),
        'surface_tot'  => \App\Models\Annonce::sum('superficie'),
        'prix_min'     => \App\Models\Annonce::min('prix'), // Petit bonus utile
        'prix_max'     => \App\Models\Annonce::max('prix'), // Petit bonus utile
    ];

    return view('annonce.dashboard', compact('stats'));
}
}