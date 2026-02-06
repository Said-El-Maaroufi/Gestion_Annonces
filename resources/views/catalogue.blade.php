<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Liste des jeux video</h1>
    <ul>
        @foreach($mesJeux as $cle => $jeu)
            <li>
                <form action="/jeuDetail" method="get">
                    <span>{{ $jeu }}</span>
                    <input type="text" name="id" value="{{ $cle }}" hidden>
                    {{-- <button >voir</button> --}}
                    <button>voir</button>
                </form>
            </li>

        @endforeach
    </ul>

</body>
</html>