@extends('layouts.app')

@section('content')

<div class="flex justify-center items-center pt-5 min-h-screen bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-center text-2xl font-semibold mb-5">Cadastro de Frete</h2>

        <form action="{{ route('fretes.store') }}" method="POST" class="flex flex-col gap-3">
            @csrf

            <div>
                <label class="font-semibold block mb-1">Nome do Cliente:</label>
                <input type="text" name="nome_cliente" required class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="font-semibold block mb-1">Peso (kg):</label>
                <input type="number" name="peso" step="0.01" required class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="font-semibold block mb-1">Distância (km):</label>
                <input type="number" name="distancia" step="0.01" required class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="font-semibold block mb-1">Tipo de Frete:</label>
                <select name="tipo_frete" required class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="normal">Normal</option>
                    <option value="expresso">Expresso</option>
                </select>
            </div>

            <button type="submit" class="mt-4 py-2 px-4 bg-red-600 text-white font-bold rounded-md hover:bg-red-700 transition duration-200">
                Calcular
            </button>
        </form>
    </div>
</div>
@endsection
