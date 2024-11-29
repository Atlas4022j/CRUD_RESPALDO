<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\HomeController;
use App\Models\Venta;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])
->name('home.index');

Route::get('/productos',[ProductoController::class,'index'])
->name('productos.index');
Route::get('/productos/create',[ProductoController::class,'create'])
->name('productos.create');
Route::post('/productos',[ProductoController::class,'store'])
->name('productos.store');
Route::get('/productos/{producto}/edit',[ProductoController::class,'edit'])
->name('productos.edit');
Route::put('/productos/{producto}',[ProductoController::class,'update'])
->name('productos.update');
Route::delete('/productos/{producto}',[ProductoController::class,'destroy'])
->name('productos.destroy');
/* Route::resource('/productos',ProductoController::class); */


Route::get('/clientes',[ClienteController::class,'index'])
->name('clientes.index');
Route::get('/clientes/create',[ClienteController::class,'create'])
->name('clientes.create');
Route::post('/clientes',[ClienteController::class,'store'])
->name('clientes.store');
Route::get('/clientes/{cliente}/edit',[ClienteController::class,'edit'])
->name('clientes.edit');
Route::put('/clientes/{cliente}',[ClienteController::class,'update'])
->name('clientes.update');

Route::get('/ventas',[VentaController::class,'index'])
->name('ventas.index');
Route::get('/ventas/create',[VentaController::class,'create'])
->name('ventas.create');
Route::post('/ventas',[VentaController::class,'store'])
->name('ventas.store');
Route::get('/ventas/{venta}/edit',[VentaController::class,'edit'])
->name('ventas.edit');
Route::put('/ventas/{venta}',[VentaController::class,'update'])
->name('ventas.update');