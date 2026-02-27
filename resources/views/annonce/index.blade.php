@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold italic border-l-4 border-blue-500 pl-2">Gestion des Annonces</h1>
    <a href="{{ route('annonce.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700 transition">
        <i class="bi bi-plus-circle"></i> Ajouter une annonce
    </a>
</div>

<div class="bg-white rounded-lg shadow overflow-hidden">
    <table class="w-full text-left">
        <thead class="bg-gray-50 border-b">
            <tr>
                <th class="p-4">Photo</th>
                <th class="p-4">Titre / Ville</th>
                <th class="p-4">Type</th>
                <th class="p-4">Prix</th>
                <th class="p-4 text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($annonces as $annonce)
            <tr class="border-b hover:bg-gray-50">
                <td class="p-4">
                    <img src="{{ $annonce->photo ? asset('storage/'.$annonce->photo) : 'https://via.placeholder.com/50' }}" class="w-12 h-12 rounded object-cover">
                </td>
                <td class="p-4">
                    <div class="font-bold">{{ $annonce->titre }}</div>
                    <div class="text-sm text-gray-500">{{ $annonce->ville }}</div>
                </td>
                <td class="p-4"><span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">{{ $annonce->type }}</span></td>
                <td class="p-4 font-semibold text-green-600">{{ number_format($annonce->prix, 2) }} DH</td>
                <td class="p-4 flex justify-center gap-2">
                    <a href="{{ route('annonce.show', $annonce) }}" class="text-gray-600 hover:text-blue-600 text-xl"><i class="bi bi-eye"></i></a>
                    <a href="{{ route('annonce.edit', $annonce) }}" class="text-gray-600 hover:text-yellow-600 text-xl"><i class="bi bi-pencil-square"></i></a>
                    <form action="{{ route('annonce.destroy', $annonce) }}" method="POST" onsubmit="return confirm('Supprimer cette annonce ?')">
                        @csrf @method('DELETE')
                        <button class="text-red-500 hover:text-red-700 text-xl"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection