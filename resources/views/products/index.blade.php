
{{-- la vue index.blade.php --}}

@extends('layouts.master')

@section('title', 'Ajouter')


@section('content')

<div class="d-flex justify-content-between align-items-center">

    
    <h1>Nos Produits </h1> 
    
    <a href="{{ route('ajouter') }}" class="btn btn-primary">Ajouter</a>
</div>

<div class=" d-flex">

    @foreach ($products as $product )
    
    
    <div class="card h-100 shadow-sm m-3"> 
        
            <img  
            src="{{ asset('images/'
    . $product['image']) }}" 
    class="card-img-top p-3" 
    style="height: 180px; object-fit: contain"
    > 
    <div class="card-body d-flex flex-column"> 
        <h5 class="card-title">{{ $product['title'] }}</h5> 
        <p class="text-success fw-semibold">{{ $product['price'] }} MAD</p>
        <a href="{{ route('show', ['id' => $product['id'] ]) }}" class="btn btn-primary">voir</a>
    </div>
    </div> 
@endforeach


</div>

    

@endsection