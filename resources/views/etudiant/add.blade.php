@extends('layouts.master')

@section('title', 'ajouter un etudiant')

@section('content')

@session('valide')
<p class="alert alert-success">{{ session('valide')}}</p>
@endsession


    <div class="container p-3">
        <div class="row ">
            <h3>Ajouter Etudiant</h3>
        </div>

        <div class="container">
            <form action="/etudiant/store" method="get">
                @csrf
                <div class="row my-3">
                    <label for="" class="form-label">Nom</label>
                    <input type="text" class="form-control @error('nom') is-invalid  @enderror" name="nom" value="{{ old('nom') }}">
                </div>
                @error('nom')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="row my-3">
                    <label for="" class="form-label">Prenom</label>
                    <input type="text" class="form-control @error('prenom') is-invalid  @enderror" name="prenom" value="{{ old('prenom') }}">
                </div>
                @error('prenom')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="row my-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid  @enderror" name="email" value="{{ old('email') }}">
                </div>
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="row my-3">
                    <label for="" class="form-label">Mot de Pass</label>
                    <input type="password" class="form-control @error('pass') is-invalid  @enderror" name="pass" value="{{ old('pass') }}">
                </div>
                @error('pass')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

                <div class="row my-3">
                    <label for="" class="form-label">Confirmation</label>
                    <input type="password" name="confirme" class="form-control @error('confirme') is-invalid  @enderror" >
                </div>
                @error('confirme')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="row my-3">
                    <label for="" class="form-label">Type de bac</label>
                    <div class="d-flex ">

                        <div class="col-2" >
                            <input type="radio" value="marocain" {{ old('bac') == 'marocain' ? 'checked' : '' }} class="@error('bac') is-invalid  @enderror"  name="bac" id="mrc">
                            <label for="mrc" class="form-label @error('bac') text-danger  @enderror">Marocain</label>
                        </div>
                        <div>
                            
                            <input type="radio" value="international" {{ old('bac') == 'international' ? 'checked' : ''}}    class="@error('bac') text-danger  @enderror" name="bac" id="int">
                            <label for="int" class="form-label @error('bac') text-danger  @enderror" >International</label>
                        </div>
                    </div>
                </div>
                @error('bac')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                
                <div class="row my-3">
                    <label for="" class="form-label">filière shouaitée</label>

                    <select 
                    name="filiere"  
                    class="form-select 
                    @error('filiere') is-invalid  @enderror" 
                    value="{{ old('filiere') }}" 
                    id=""
                    >

                    <option value="">choisir une filiere</option>
                    @foreach(['SMI', 'SMA', 'SEG', 'PC'] as $filiere)
                        <option value="{{ $filiere }}"  {{ old('filiere') == $filiere ? 'selected' : ''}} >{{ $filiere }}</option>
                    @endforeach
                        
                    </select>
                </div>
                @error('filiere')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

                <div class="row">
                    <button class="btn btn-primary m-1">Ajouter l'étudiant</button>
                </div>
            </form>
        </div>

    </div>
@endsection