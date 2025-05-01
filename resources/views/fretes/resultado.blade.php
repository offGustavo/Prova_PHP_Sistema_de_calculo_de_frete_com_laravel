<!-- vim: ft=php -->
@extends('layouts.app')

@section('content')
<div style="display: flex; justify-content: center; align-items: center; margin-top: 20px;">
    <div style="background-color: #fff; padding: 24px; border-radius: 8px; box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1); width: 100%; max-width: 400px;">
        <h2 style="text-align: center; margin-bottom: 20px;">Detalhes do Frete</h2>

        <p><strong>Cliente:</strong> {{ $frete->nome_cliente }}</p>
        <p><strong>Peso:</strong> {{ number_format($frete->peso, 2, ',', '.') }} kg</p>
        <p><strong>Distância:</strong> {{ number_format($frete->distancia, 2, ',', '.') }} km</p>
        <p><strong>Tipo de Frete:</strong> {{ ucfirst($frete->tipo_frete) }}</p>
        <p><strong>Valor Total:</strong> R$ {{ number_format($frete->valor_total, 2, ',', '.') }}</p>

        <div style="text-align: center; margin-top: 20px; display: flex; justify-content: end; gap: 5px;">
            <a href="{{ route('frete.index') }}"  style="display: inline-block; padding: 10px 16px; background-color: #c53030; color: white; border-radius: 4px; text-decoration: none; font-weight: bold;">
                Lista de Fretes
            </a>
            <a href="{{ route('frete.create') }}" style="display: inline-block; padding: 10px 16px; background-color: #c53030; color: white; border-radius: 4px; text-decoration: none; font-weight: bold;">
                Novo Frete
            </a>
        </div>
    </div>
</div>
@endsection
