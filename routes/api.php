<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FreteApiController;

Route::get('/fretes', [FreteApiController::class, 'index']);

Route::get('/teste', function () {
    return response()->json(['ok' => true]);
});


