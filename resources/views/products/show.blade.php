@extends('layouts.master')

@section('title', 'product')

@section('content')

<div>

    @foreach($products as $key => $product)
    @if($product['id'] === (int)$id)
    <div class="text-center m-3  rounded ">
        <h2>{{ $product['title'] }}</h2>
        <img class="p-2" src="{{ asset('images/'.$product['image']) }}" alt="not-found" >
        <br>
        <mark class="fw-bold">{{ $product['price'] }}DH</mark>
        <p class="text-muted">{{ $product['description'] }}</p>
</div>
    @endif
    @endforeach
</div>


@endsection