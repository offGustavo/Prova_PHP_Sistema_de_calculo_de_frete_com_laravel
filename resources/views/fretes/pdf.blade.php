<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Relatório de Fretes</title>
    <style>
        body { font-family: sans-serif; font-size: 14px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
    </style>
</head>
<body>
    <h2>Relatório de Fretes</h2>
    <table>
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Tipo</th>
                <th>Peso</th>
                <th>Distância</th>
                <th>Valor Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($fretes as $frete)
                <tr>
                    <td>{{ $frete->nome_cliente }}</td>
                    <td>{{ ucfirst($frete->tipo_frete) }}</td>
                    <td>{{ $frete->peso }}</td>
                    <td>{{ $frete->distancia }}</td>
                    <td>R$ {{ number_format($frete->valor_total, 2, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
