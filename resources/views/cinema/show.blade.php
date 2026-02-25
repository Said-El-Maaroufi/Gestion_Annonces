@extends('layouts.master')

@section('title', 'films')


@section('content')



        {{-- 
        [
            'titre' => 'Inception',
            'pays' => 'USA', 
            'annee' => '2010', 
            'duree' => '02:28:00', 
            'genre' => 'Sci-Fi', 
            'created_at' => now(), 
            'updated_at' => now()
        ] 
        --}}

    <div class="card p-3 ">
        <div class=" d-flex align-items-center">
            <h3 class="card-title me-3 fw-bold ps-3">{{ $film->titre }}</h3>
            <p class="text-secondary fs-2">({{ $film->annee }})</p>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush fs-4">
                <li class="list-group-item "><span class="text-secondary fw-bold fs-4 pe-5" >Pays</span> {{ $film->pays }}</li>
                <li class="list-group-item"><span class="text-secondary fw-bold fs-4 pe-5">Genre</span> {{ $film->genre }} </li>
                <li class="list-group-item"><span class="text-secondary fw-bold fs-4 pe-5">Durée</span> {{ $film->duree }} </li>
            </ul>
            <button class="btn btn-success btn-lg m-3">
                Voir Les Acteurs</button>
        </div>
        

    </div>
@endsection