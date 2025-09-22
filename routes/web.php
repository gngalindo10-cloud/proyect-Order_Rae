<?php

use App\Models\Produccion;
use App\Models\Inventario;
use App\Http\Controllers\Inventario\InventarioController;
use App\Http\Controllers\Produccion\ProduccionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])
->resource('inventario', InventarioController::class)
->names('inventario');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])
->resource('produccion', ProduccionController::class)
->names('produccion');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
