<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sistema de Fretes')</title>
    <link href="https://cdn.tailwindcss.com" rel="stylesheet"> {{-- Ou seu CSS --}}
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto mt-8 p-4 bg-white rounded shadow">
        @yield('content')
    </div>
</body>
</html>
