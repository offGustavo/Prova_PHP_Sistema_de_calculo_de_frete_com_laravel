@extends('layouts.layout')

@section('content')
<div style="display: flex; justify-content: center; align-items: center; padding-top: 20px; height: 100%;">
    <div style="background-color: #fff; padding: 24px; border-radius: 8px; box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1); width: 100%; max-width: 400px;">
        <h2 style="text-align: center; margin-bottom: 20px;">Cadastro de Frete</h2>
        <form action="{{ route('frete.store') }}" method="POST" style="display: flex; flex-direction: column; gap: 12px;">
            @csrf

            <label style="font-weight: bold;">Nome do Cliente:</label>
            <input type="text" name="nome_cliente" required style="padding: 8px; border: 1px solid #ccc; border-radius: 4px;">

            <label style="font-weight: bold;">Peso (kg):</label>
            <input type="number" name="peso" step="0.01" required style="padding: 8px; border: 1px solid #ccc; border-radius: 4px;">

            <label style="font-weight: bold;">Distância (km):</label>
            <input type="number" name="distancia" step="0.01" required style="padding: 8px; border: 1px solid #ccc; border-radius: 4px;">

            <label style="font-weight: bold;">Tipo de Frete:</label>
            <select name="tipo_frete" required style="padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                <option value="normal">Normal</option>
                <option value="expresso">Expresso</option>
            </select>

            <button type="submit" style="padding: 10px; background-color: #c53030; color: white; border: none; border-radius: 4px; font-weight: bold; cursor: pointer;">
                Calcular
            </button>
        </form>
    </div>
</div>
@endsection
