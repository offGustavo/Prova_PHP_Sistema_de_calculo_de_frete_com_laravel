<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Frete extends Model
{
   protected $fillable = [
        'nome_cliente',
        'peso',
        'distancia',
        'tipo_frete',
        'valor_total'
    ];
}
