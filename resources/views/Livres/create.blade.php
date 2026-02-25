@extends('layouts.master')

@section('title','Livre')

@section('content')


@session('')
@endsession
    <form action="{{ route('Livres.store') }}" method="POST">
    @csrf
    <div class="row p-2 m-2 text-center">
        <h3>Ajouter un Livre</h3>
    </div>
    <div class="row ">
        <label class="form-label">Titre du livre :</label>
        <input type="text" name="title" class="form-control" >
    </div>

    <div class="row mt-2">
        <label class="form-label">Prix :</label>
        <input type="number" step="0.01" name="price" class="form-control" >
    </div>

    <div class="row mt-2">
        <label class="form-label">Note (1 à 5) :</label>
        <input type="number" class="form-control" name="rate" min="1" max="5" >
    </div>
    <div class="row my-4">

        <button type="submit" class="btn btn-primary">Enregistrer le livre</button>
    </div>
</form>
@endsection