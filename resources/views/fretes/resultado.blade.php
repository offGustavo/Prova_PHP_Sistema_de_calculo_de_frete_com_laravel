<!-- vim: ft=php -->
@extends('layouts.app')

@section('content')
    <h2>Resultado do Frete</h2>
    <p><strong>Cliente:</strong> {{ $frete->nome_cliente }}</p>
    <p><strong>Peso:</strong> {{ $frete->peso }} kg</p>
    <p><strong>Distância:</strong> {{ $frete->distancia }} km</p>
    <p><strong>Tipo de Frete:</strong> {{ ucfirst($frete->tipo_frete) }}</p>
    <p><strong>Valor Total:</strong> R$ {{ number_format($frete->valor_total, 2, ',', '.') }}</p>
    <a href="{{ route('frete.create') }}">Novo Frete</a>
@endsection
