<!-- vim: ft=php -->
@extends('layouts.app')

@section('content')
    <h2>Cadastro de Frete</h2>
    <form action="{{ route('frete.store') }}" method="POST">
        @csrf
        <label>Nome do Cliente:</label>
        <input type="text" name="nome_cliente" required><br>
        <label>Peso (kg):</label>
        <input type="number" name="peso" step="0.01" required><br>
        <label>Distância (km):</label>
        <input type="number" name="distancia" step="0.01" required><br>
        <label>Tipo de Frete:</label>
        <select name="tipo_frete" required>
            <option value="normal">Normal</option>
            <option value="expresso">Expresso</option>
        </select><br>
        <button type="submit">Calcular</button>
    </form>
@endsection

