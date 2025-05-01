@extends('layouts.app')

@section('content')
<div>
    <h1>Fretes Cadastrados</h1>
    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <thead style="background-color: #c53030; color: white;">
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
            <tr style="background-color: {{ $loop->even ? '#ffffff' : '#f9f9f9' }};">
                <td><strong>{{ $frete->nome_cliente }}</strong></td>
                <td style="text-align: center;">
                    {{ number_format($frete->peso, 2, ',', '.') }} kg
                </td>

                <td style="text-align: center;">
                    {{ number_format($frete->distancia, 1, ',', '.') }} km
                </td>
                <td style="text-align: center;">
                    @if ($frete->tipo_frete == 'expresso')
                    <span style="color: red; font-weight: bold;">{{ $frete->tipo_frete }}</span>
                    @else
                    {{ $frete->tipo_frete }}
                    @endif
                </td>
                <td style="text-align: center;">R$ {{ number_format($frete->valor_total, 2, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
