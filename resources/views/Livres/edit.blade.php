@extends('layouts.master')

@section('title','Edite')

@section('content')


<h1>Modifier le livre : {{ $livre->title }}</h1>

<form action="{{ route('Livres.update', $livre->id) }}" method="POST">
    @csrf
    @method('PUT') <div>
        <label for="title">Titre :</label>
        <input type="text" name="title" id="title" value="{{ old('title', $livre->title) }}" required>
        @error('title') <span style="color: red;">{{ $message }}</span> @enderror
    </div>

    <br>

    <div>
        <label for="price">Prix :</label>
        <input type="number" step="0.01" name="price" id="price" value="{{ old('price', $livre->price) }}" required>
        @error('price') <span style="color: red;">{{ $message }}</span> @enderror
    </div>

    <br>

    <div>
        <label for="rate">Note (1 à 5) :</label>
        <input type="number" name="rate" id="rate" min="1" max="5" value="{{ old('rate', $livre->rate) }}" required>
        @error('rate') <span style="color: red;">{{ $message }}</span> @enderror
    </div>

    <br>

    <button type="submit">Mettre à jour le livre</button>
    <a href="{{ route('Livres.index') }}">Annuler</a>
</form>

@endsection