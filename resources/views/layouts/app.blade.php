<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">

            <!-- Navbar personalizada -->
            <nav class="bg-white shadow mb-6">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16">
                    <div>
                        <a href="{{ route('dashboard') }}" class="text-lg font-semibold text-gray-800">Sistema de Fretes</a>
                    </div>
                    <div class="flex space-x-4" style="gap: 10px;">
                        <a href="{{ route('fretes.index') }}" class="text-gray-700 hover:text-blue-600">Listar Fretes</a>
                        <a href="{{ route('fretes.create') }}" class="text-gray-700 hover:text-blue-600">Criar Frete</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="text-gray-700 hover:text-red-600" type="submit">Sair</button>
                        </form>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
        </div>
    </body>
</html>
