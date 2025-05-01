<!-- vim: set ft=php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sistema de Fretes')</title>
    <style>
        body {
            margin: 0;
            font-family: sans-serif;
            /* background-color: #f3f3f3; */
            color: #333;
        }

        .site-header {
            width: 100%;
            background-color: #c53030; /* vermelho escuro */
            color: white;
            padding: 16px 32px;
            box-sizing: border-box;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .header-content h1 {
            margin: 0;
            font-size: 1.5rem;
        }

        .header-content nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-weight: bold;
        }

        .header-content nav a:hover {
            text-decoration: underline;
        }

        /* .container { */
        /*     max-width: 1200px; */
        /*     margin: 32px auto; */
        /*     padding: 16px; */
        /*     background-color: white; */
        /*     border-radius: 8px; */
        /*     box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1); */
        /* } */
    </style>
</head>
<body>
    <header class="site-header">
        <div class="header-content">
            <h1>Sistema de Fretes</h1>
            <nav>
                <a href="{{ route('frete.create') }}">Formulário</a>
                <a href="{{ route('frete.index') }}">Lista de Fretes</a>
            </nav>
        </div>
    </header>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
