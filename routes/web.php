<?php

use App\Http\Controllers\FreteController;

Route::get('/', [FreteController::class, 'index'])->name('frete.index');        // Lista de fretes
Route::get('/frete', [FreteController::class, 'create'])->name('frete.create');       // Formulário
Route::post('/frete', [FreteController::class, 'store'])->name('frete.store');        // Processa formulário
Route::get('/frete/resultado/{id}', [FreteController::class, 'resultado'])->name('frete.resultado'); // Resultado


