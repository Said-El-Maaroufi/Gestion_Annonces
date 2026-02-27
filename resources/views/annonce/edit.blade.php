@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-md border border-gray-100">
    <div class="flex items-center gap-4 mb-8">
        <a href="{{ route('annonce.index') }}" class="text-gray-400 hover:text-gray-600"><i class="bi bi-arrow-left-circle text-3xl"></i></a>
        <h2 class="text-2xl font-bold text-gray-800">Modifier l'Annonce : <span class="text-blue-600">#{{ $Annonce->id }}</span></h2>
    </div>

    <form action="{{ route('annonce.update', $Annonce->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="md:col-span-2">
                <label class="block font-medium text-gray-700 mb-2">Titre de l'annonce</label>
                <input type="text" name="titre" value="{{ $Annonce->titre }}" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2.5 border" required>
            </div>

            <div>
                <label class="block font-medium text-gray-700 mb-2">Type de bien</label>
                <select name="type" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2.5 border">
                    @foreach(['Appartement', 'Maison', 'Villa', 'Magasin', 'Terrain'] as $type)
                        <option value="{{ $type }}" {{ $Annonce->type == $type ? 'selected' : '' }}>{{ $type }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block font-medium text-gray-700 mb-2">Ville</label>
                <input type="text" name="ville" value="{{ $Annonce->ville }}" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2.5 border" required>
            </div>

            <div>
                <label class="block font-medium text-gray-700 mb-2">Prix (DH)</label>
                <div class="relative">
                    <input type="number" step="0.01" name="prix" value="{{ $Annonce->prix }}" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2.5 border pl-10" required>
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                        <i class="bi bi-cash"></i>
                    </div>
                </div>
            </div>

            <div>
                <label class="block font-medium text-gray-700 mb-2">Superficie (m²)</label>
                <input type="number" step="0.1" name="superficie" value="{{ $Annonce->superficie }}" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2.5 border" required>
            </div>

            <div class="flex items-center gap-3 p-4 bg-blue-50 rounded-lg">
                <input type="hidden" name="neuf" value="0">
                <input type="checkbox" name="neuf" value="1" id="neuf" {{ $Annonce->neuf ? 'checked' : '' }} class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="neuf" class="font-medium text-blue-800 cursor-pointer italic text-sm">Le bien est neuf</label>
            </div>

            <div class="md:col-span-2 space-y-2">
                <label class="block font-medium text-gray-700 italic">Modifier la photo</label>
                <div class="flex items-center gap-4">
                    @if($Annonce->photo)
                        <img src="{{ asset('storage/' . $Annonce->photo) }}" class="w-20 h-20 rounded shadow object-cover">
                    @endif
                    <input type="file" name="photo" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                </div>
            </div>

            <div class="md:col-span-2">
                <label class="block font-medium text-gray-700 mb-2">Description complète</label>
                <textarea name="description" rows="4" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2.5 border">{{ $Annonce->description }}</textarea>
            </div>
        </div>

        <div class="mt-8">
            <button type="submit" class="w-full bg-blue-600 text-white font-bold py-3 rounded-lg hover:bg-blue-700 transition duration-300 flex items-center justify-center gap-2 shadow-lg shadow-blue-200">
                <i class="bi bi-check-circle"></i> Enregistrer les modifications
            </button>
        </div>
    </form>
</div>
@endsection