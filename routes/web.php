<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('catalogo', function() {
    return View::make('catalogo');
});

Route::get('detalle-producto', function() {
    return View::make('detalleproducto');
});

Route::get('carrito', function() {
    return View::make('carrito');
});

Route::get('ingresar', function() {
    return View::make('ingreso');
});
