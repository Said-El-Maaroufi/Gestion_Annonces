<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <p>{{ gettype((int)$id) }}</p>


    @if ($id === 'not-found')
        <p>l'id est {{ $id }}</p>
    @else
        <h3>le jeu numero {{ $id }} est: </h3>
        @foreach($mesJeux as $key => $value)
            @if($key ===  (int)$id)
                <p>le nom du jeu est {{ $value }}</p>
            @endif
        @endforeach
    @endif
</body>
</html>