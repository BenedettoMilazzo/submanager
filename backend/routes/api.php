<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AbbonamentoController;

// Rotte API per abbonamenti
Route::get('/abbonamenti', [AbbonamentoController::class, 'index']);
Route::post('/abbonamenti', [AbbonamentoController::class, 'store']);
