<?php

use App\Http\Controllers\FreteController;

Route::get('/fretes', [FreteController::class, 'index']);

