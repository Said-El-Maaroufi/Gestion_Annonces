@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden">
    <div class="md:flex">
        <div class="md:shrink-0 bg-gray-200 w-full md:w-96 flex items-center justify-center">
            @if($Annonce->photo)
                <img class="h-full w-full object-cover" src="{{ asset('storage/' . $Annonce->photo) }}" alt="{{ $Annonce->titre }}">
            @else
                <i class="bi bi-house-door text-9xl text-gray-400"></i>
            @endif
        </div>

        <div class="p-8 w-full">
            <div class="flex justify-between items-start">
                <div>
                    <div class="uppercase tracking-wide text-sm text-blue-600 font-semibold italic">
                        {{ $Annonce->type }} — {{ $Annonce->neuf ? 'Neuf' : 'Ancien' }}
                    </div>
                    <h1 class="block mt-1 text-3xl font-bold text-gray-900">{{ $Annonce->titre }}</h1>
                    <p class="text-gray-500 mt-2"><i class="bi bi-geo-alt-fill text-red-500"></i> {{ $Annonce->ville }}</p>
                </div>
                <div class="text-2xl font-bold text-green-600 bg-green-50 px-4 py-2 rounded-lg">
                    {{ number_format($Annonce->prix, 2, ',', ' ') }} DH
                </div>
            </div>

            <div class="mt-6 border-t pt-4">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Description</h3>
                <p class="text-gray-600 leading-relaxed">
                    {{ $Annonce->description }}
                </p>
            </div>

            <div class="mt-6 grid grid-cols-2 gap-4">
                <div class="bg-gray-50 p-3 rounded-lg flex items-center gap-3">
                    <i class="bi bi-rulers text-blue-500 text-xl"></i>
                    <div>
                        <p class="text-xs text-gray-500 uppercase">Superficie</p>
                        <p class="font-bold text-gray-700">{{ $Annonce->superficie }} m²</p>
                    </div>
                </div>
                <div class="bg-gray-50 p-3 rounded-lg flex items-center gap-3">
                    <i class="bi bi-calendar-event text-blue-500 text-xl"></i>
                    <div>
                        <p class="text-xs text-gray-500 uppercase">Publié le</p>
                        <p class="font-bold text-gray-700">{{ $Annonce->created_at->format('d/m/Y') }}</p>
                    </div>
                </div>
            </div>

            <div class="mt-8 flex gap-3">
                <a href="{{ route('annonce.index') }}" class="flex-1 text-center bg-gray-200 text-gray-700 py-3 rounded-lg font-bold hover:bg-gray-300 transition">
                    <i class="bi bi-arrow-left"></i> Retour
                </a>
                <a href="{{ route('annonce.edit', $Annonce->id) }}" class="flex-1 text-center bg-yellow-500 text-white py-3 rounded-lg font-bold hover:bg-yellow-600 transition shadow-lg shadow-yellow-200">
                    <i class="bi bi-pencil"></i> Modifier
                </a>
            </div>
        </div>
    </div>
</div>
@endsection