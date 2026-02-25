@extends('layouts.master')

@section('title', 'films')


@section('content')

<div class="row justify-content-center">

    
    @if(!$films)
    <p class="alert alert-danger">not-found</p>
    @else
    
    <h1 class="text-center">Movies</h1>
    @foreach($films as $cle => $film)
    <div class="card m-3" style="width:18rem;">
        <div class="card-body">
            <h5 class="card-title text-primary">{{ $film->titre}}</h5>
            <h6> {{ $film->genre }} . {{ $film->annee }} </h6>
            <h6 class="text-muted">{{ $film->pays }} | {{ $film->duree }}</h6>
            <a href="{{ route('cinema.show', $cle ) }}"  class="btn btn-primary mt-2">Détails</a>
        </div>
    </div>
    
    
    @endforeach
    @endif
</div>
@endsection 
