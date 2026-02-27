@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded shadow">
    <h2 class="text-xl font-bold mb-6">Nouvelle Annonce</h2>
    <form action="{{ route('annonce.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-2 gap-4">
            <div class="col-span-2">
                <label class="block mb-1">Titre</label>
                <input type="text" name="titre" class="w-full border p-2 rounded" required>
            </div>
            <div>
                <label class="block mb-1">Type</label>
                <select name="type" class="w-full border p-2 rounded">
                    <option>Appartement</option><option>Maison</option><option>Villa</option><option>Magasin</option><option>Terrain</option>
                </select>
            </div>
            <div>
                <label class="block mb-1">Ville</label>
                <input type="text" name="ville" class="w-full border p-2 rounded">
            </div>
            <div>
                <label class="block mb-1">Prix (DH)</label>
                <input type="number" step="0.01" name="prix" class="w-full border p-2 rounded">
            </div>
            <div>
                <label class="block mb-1">Superficie (m²)</label>
                <input type="number" name="superficie" class="w-full border p-2 rounded">
            </div>
            <div class="flex items-center gap-2">
                <input type="checkbox" name="neuf" value="1"> <label>Neuf ?</label>
            </div>
            <div class="col-span-2">
                <label class="block mb-1">Photo</label>
                <input type="file" name="photo" class="w-full border p-2 rounded">
            </div>
            <div class="col-span-2">
                <label class="block mb-1">Description</label>
                <textarea name="description" class="w-full border p-2 rounded"></textarea>
            </div>
        </div>
        <button class="mt-4 bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">Enregistrer</button>
    </form>
</div>
@endsection