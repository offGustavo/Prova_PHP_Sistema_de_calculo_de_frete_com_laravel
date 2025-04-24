<!-- resources/views/fretes/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Fretes</title>
</head>
<body>
    <h1>Fretes Cadastrados</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Peso</th>
                <th>Distância</th>
                <th>Tipo de Frete</th>
                <th>Valor Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fretes as $frete)
                <tr>
                    <td>{{ $frete->nome_cliente }}</td>
                    <td>{{ $frete->peso }}</td>
                    <td>{{ $frete->distancia }}</td>
                    <td>{{ $frete->tipo_frete }}</td>
                    <td>{{ $frete->valor_total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

