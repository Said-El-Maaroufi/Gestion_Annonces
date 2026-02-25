<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body class="d-flex flex-column min-vh-100">

    @include('partials.navbar')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 p-0">
                @include('partials.aside')
            </div>

            <main class="col-md-9 p-4">
                @yield('content')
            </main>
        </div>
    </div>

    @include('partials.footer')

</body>
</html>