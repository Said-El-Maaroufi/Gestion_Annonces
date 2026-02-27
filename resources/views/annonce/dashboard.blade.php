@extends('layouts.app')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-bold text-gray-800 italic border-l-8 border-blue-600 pl-4">Tableau de Bord des Statistiques</h1>
    <p class="text-gray-500 mt-2">Aperçu global de votre catalogue immobilier</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    <div class="bg-white p-6 rounded-xl shadow-md border-t-4 border-blue-500 hover:shadow-lg transition">
        <div class="flex justify-between items-center">
            <div>
                <p class="text-sm font-medium text-gray-500 uppercase">Total Annonces</p>
                <p class="text-3xl font-bold text-gray-800">{{ $stats['total'] }}</p>
            </div>
            <div class="bg-blue-100 p-3 rounded-full">
                <i class="bi bi-collection-play text-blue-600 text-2xl"></i>
            </div>
        </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-md border-t-4 border-green-500 hover:shadow-lg transition">
        <div class="flex justify-between items-center">
            <div>
                <p class="text-sm font-medium text-gray-500 uppercase">Valeur Catalogue</p>
                <p class="text-2xl font-bold text-gray-800">{{ number_format($stats['prix_total'], 0, ',', ' ') }} DH</p>
            </div>
            <div class="bg-green-100 p-3 rounded-full">
                <i class="bi bi-cash-stack text-green-600 text-2xl"></i>
            </div>
        </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-md border-t-4 border-purple-500 hover:shadow-lg transition">
        <div class="flex justify-between items-center">
            <div>
                <p class="text-sm font-medium text-gray-500 uppercase">Prix Moyen</p>
                <p class="text-2xl font-bold text-gray-800">{{ number_format($stats['prix_moyen'], 2, ',', ' ') }} DH</p>
            </div>
            <div class="bg-purple-100 p-3 rounded-full">
                <i class="bi bi-graph-up text-purple-600 text-2xl"></i>
            </div>
        </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-md border-t-4 border-orange-500 hover:shadow-lg transition">
        <div class="flex justify-between items-center">
            <div>
                <p class="text-sm font-medium text-gray-500 uppercase">Surface Totale</p>
                <p class="text-2xl font-bold text-gray-800">{{ number_format($stats['surface_tot'], 2, ',', ' ') }} m²</p>
            </div>
            <div class="bg-orange-100 p-3 rounded-full">
                <i class="bi bi-building text-orange-600 text-2xl"></i>
            </div>
        </div>
    </div>
</div>

<div class="mt-10 flex gap-4">
    <a href="{{ route('annonce.index') }}" class="bg-gray-800 text-white px-6 py-3 rounded-lg hover:bg-gray-700 transition flex items-center gap-2 shadow-lg">
        <i class="bi bi-list-task"></i> Retour à la liste
    </a>
</div>
@endsection