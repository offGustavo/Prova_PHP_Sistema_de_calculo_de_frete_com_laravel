<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FreteResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nome_cliente' => $this->nome_cliente,
            'peso' => $this->peso,
            'distancia' => $this->distancia,
            'tipo_frete' => $this->tipo_frete,
            'valor_total' => $this->valor_total,
            'created_at' => $this->created_at,
        ];
    }
}
