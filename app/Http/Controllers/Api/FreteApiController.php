<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frete;
use App\Http\Resources\FreteResource;

class FreteApiController extends Controller
{
    public function index(Request $request)
    {
        $query = Frete::query();

        if ($request->filled('tipo_frete')) {
            $query->where('tipo_frete', $request->tipo_frete);
        }

        if ($request->filled('nome_cliente')) {
            $query->where('nome_cliente', 'like', '%' . $request->nome_cliente . '%');
        }

        if ($request->filled('valor_min')) {
            $query->where('valor_total', '>=', $request->valor_min);
        }

        if ($request->filled('valor_max')) {
            $query->where('valor_total', '<=', $request->valor_max);
        }

        $fretes = $query->get();

        return FreteResource::collection($fretes);
    }
}
