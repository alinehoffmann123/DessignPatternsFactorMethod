<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FormaGeometricaController;

Route::get('/', [FormaGeometricaController::class, 'exibirForm']);
Route::post('/criar-forma', [FormaGeometricaController::class, 'criarForma']);


