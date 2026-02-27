<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ImmoApp</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4 shadow-md flex justify-between">
                {{ session('success') }}
                <button onclick="this.parentElement.remove()">x</button>
            </div>
        @endif
        @yield('content')
    </div>
</body>
</html>