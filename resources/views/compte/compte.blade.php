<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>creer un compte</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    
</head>
<body>

    @session("valide")
        <p class="alert alert-success" >{{ session("valide") }}</p>
    @endsession

    
    <form action="/compte/store" method="get">

        @csrf
        <div class="container rounded border mt-3 p-5 bg-white w-25 h-100 d-flex flex-column justify-center">
            <h3 class="text-center p-3">Créer un compte</h3>
            <div class="row">
                <label for="" class="form-label my-3">Nom d'utilisateur</label>
                <input type="text" class="form-control @error('login') is-invalid  @enderror" value="{{ old('login') }}"  name="login">
            </div>
            @error('login')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="row">
                <label for="" class="form-label my-2">Mot de Pass</label>
                <input type="password" class="form-control"   name="pass">
            </div>
            @error('pass')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="row">
                <label for="" class="form-label my-3">Confirmer le mot de pass</label>
                <input type="password" class="form-control"  name="confirme">
            </div>
            @error('confirme')
                <span class="text-danger">{{ $message }}</span>
            @enderror

            <div class="row">
                <button class="btn btn-primary mt-4">S'inscrire</button>
            </div>
        </div>
    </form>
</body>
</html>