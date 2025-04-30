<!-- vim: set ft=php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sistema de Fretes')</title>
    <!-- <link href="https://cdn.tailwindcss.com" rel="stylesheet"> {{-- Ou seu CSS --}} -->
    <link href="../../css/header.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto mt-8 p-4 bg-white rounded shadow">
            <header>
                <a href="{{ route('frete.create') }}" class="text-blue-500 underline">Formulário</a>
                <a href="{{ route('frete.index') }}" class="text-blue-500 underline">Lista de Fretes</a>
            </header>
        @yield('content')
    </div>
</body>
</html>


