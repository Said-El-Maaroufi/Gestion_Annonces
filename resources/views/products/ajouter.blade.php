@extends('layouts.master')


@section('title', 'Ajouter')

@section('content')

@session("success")
<p class="alert alert-success">{{ session("success") }}</p>
@endsession

{{--
@if($errors->any())
<ul class="text-danger">
    @foreach($errors->all() as $error)
        <li >{{ $error }}</li>
    @endforeach
</ul>

@endif --}}
    <form action="/product/store" method="get" >
        
        @csrf

        <div class="container rounded shadow border  ">
            
            <div class="row bg-secondary-subtle p-2 border">
                <h3>Ajouter un produit</h3>
            </div>

            <div class="container p-3" >

            <div class="row my-3">
                <label for="" class="form-label">Title</label>
                <input type="text" value="{{ old('title') }}" name="title" class="form-control @error('title') is-invalid @enderror">
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="row my-3">

                <label for="" class="form-label">Price</label>
                <input type="number" value="{{ old('price') }}" name="price" class="form-control @error('price') is-invalid @enderror">
                @error('price')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="row my-3">

                <label for="" class="form-label">Description</label>

                <textarea name="desc" id="" cols="10" rows="4" class="form-control @error('desc') is-invalid @enderror" ></textarea>
                @error('desc')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="row">
                <button class="  btn btn-primary">Envoyer</button>
            </div>
            </div>

        </div>
    </form>
@endsection