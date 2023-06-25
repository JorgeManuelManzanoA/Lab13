<?php

use App\Http\Controllers\RegistroController;
use App\Http\Controllers\InicioSesionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoController;

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('productos/create', [ProductoController::class, 'create'])->name('productos.create');


Route::get('/{tipo}/{producto}', [ProductoController::class, 'show'])->name('productos.show');
Route::get('/{tipo}', [ProductoController::class, 'showByTipo'])->name('productos.showByTipo');


Route::post('productos/store', [ProductoController::class, 'store'])->name('productos.store');
Route::get('/create', [TipoController::class, 'create'])->name('tipos.create');
Route::post('/store', [TipoController::class, 'store'])->name('tipos.store');
Route::get('/', [TipoController::class, 'index'])->name('tipos.index');

