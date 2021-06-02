<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TercerosController;

Route::group(['middleware' => ['cors']], function () {
    Route::get('/', [TercerosController::class, 'index'])->name('terceros.index');
    Route::post('/store', [TercerosController::class, 'store'])->name('terceros.store');
    Route::get('/edit/{id}', [TercerosController::class, 'edit'])->name('terceros.edit');
    Route::put('/update/{id}', [TercerosController::class, 'update'])->name('terceros.update');
    Route::delete('/delete/{id}', [TercerosController::class, 'destroy'])->name('terceros.destroy');
    Route::get('/departamentos', [TercerosController::class, 'getDepartamentos'])->name('getDepartamentos');
    Route::get('/ciudades', [TercerosController::class, 'getCiudades'])->name('getCiudades');
    Route::get('/contribuyentes', [TercerosController::class, 'getContri'])->name('getContri');
});