<?php

use App\Http\Controllers\FreteController;


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/fretes', [FreteController::class, 'index'])->name('fretes.index');
    Route::post('/fretes', [FreteController::class, 'store'])->name('fretes.store');
    Route::get('/fretes/create', [FreteController::class, 'create'])->name('fretes.create');
    Route::get('/frete/resultado/{id}', [FreteController::class, 'resultado'])->name('frete.resultado');
    Route::get('/fretes/exportar', [FreteController::class, 'exportPdf'])->name('fretes.exportar');
});

require __DIR__.'/auth.php';


