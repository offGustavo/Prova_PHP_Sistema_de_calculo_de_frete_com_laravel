<!-- vim: ft=php -->
@extends('layouts.app')

@section('content')
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
                    <td>R$ {{ number_format($frete->valor_total, 2, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

