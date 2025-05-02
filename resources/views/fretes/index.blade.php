@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <h1 class="text-2xl font-bold mb-6">Lista de Fretes</h1>

    <!-- Formulário de Filtro -->
    <form action="{{ route('fretes.index') }}" method="GET" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 mb-6" style="width: 500px;">
        <div>
            <label for="tipo_frete" class="block text-sm font-medium text-gray-700">Tipo de Frete</label>
            <select name="tipo_frete" id="tipo_frete" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <option value="">Todos</option>
                <option value="normal" {{ request('tipo_frete') == 'normal' ? 'selected' : '' }}>Normal</option>
                <option value="expresso" {{ request('tipo_frete') == 'expresso' ? 'selected' : '' }}>Expresso</option>
            </select>
        </div>

        <div>
            <label for="nome_cliente" class="block text-sm font-medium text-gray-700">Nome do Cliente</label>
            <input type="text" name="nome_cliente" id="nome_cliente" value="{{ request('nome_cliente') }}"
                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div>
            <label for="valor_min" class="block text-sm font-medium text-gray-700">Valor Mínimo</label>
            <input type="number" step="0.01" name="valor_min" id="valor_min" value="{{ request('valor_min') }}"
                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div>
            <label for="valor_max" class="block text-sm font-medium text-gray-700">Valor Máximo</label>
            <input type="number" step="0.01" name="valor_max" id="valor_max" value="{{ request('valor_max') }}"
                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="w-full bg-red-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-700 transition">
                Filtrar
            </button>
        <a href="{{ route('fretes.exportar', request()->query()) }}" style="text-align: center;" class="w-full bg-red-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-700 transition">
            Exportar PDF
        </a>
        </div>
    </form>

    <!-- Botão de Exportar PDF -->
    <div class="mb-4">
    </div>

    <!-- Tabela de resultados -->
    <div class="overflow-x-auto">
        <table class="w-full bg-white border border-gray-200 rounded-md shadow-sm">
            <thead class="bg-gray-100 text-gray-700 text-left text-sm uppercase font-semibold">
                <tr>
                    <th class="px-4 py-3 border-b">Cliente</th>
                    <th class="px-4 py-3 border-b">Tipo</th>
                    <th class="px-4 py-3 border-b">Peso (kg)</th>
                    <th class="px-4 py-3 border-b">Distância (km)</th>
                    <th class="px-4 py-3 border-b">Valor Total (R$)</th>
                </tr>
            </thead>
            <tbody class="text-sm text-gray-800">
                @forelse($fretes as $frete)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 border-t">{{ $frete->nome_cliente }}</td>
                        <td class="px-4 py-2 border-t">{{ ucfirst($frete->tipo_frete) }}</td>
                        <td class="px-4 py-2 border-t">{{ $frete->peso }}</td>
                        <td class="px-4 py-2 border-t">{{ $frete->distancia }}</td>
                        <td class="px-4 py-2 border-t">R$ {{ number_format($frete->valor_total, 2, ',', '.') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-4 text-gray-500">Nenhum frete encontrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Paginação -->
    <div class="mt-6">
        {{ $fretes->appends(request()->query())->links() }}
    </div>
</div>
@endsection
