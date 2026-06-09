<?php

use Illuminate\Support\Facades\Route;
Route::get('/multiplicar/{num1}/{num2}', [App\Http\Controllers\OperacionesController::class, 'multiplicar']);
Route::get('/dividir/{num1}/{num2}', [App\Http\Controllers\OperacionesController::class, 'dividir']);
Route::get('/cuadratica/{a}/{b}/{c}', [App\Http\Controllers\OperacionesController::class, 'cuadratica']);
Route::get('/triangulo/{base}/{altura}', [App\Http\Controllers\OperacionesController::class, 'areaTriangulo']);
Route::get('/circulo/{radio}',  [App\Http\Controllers\OperacionesController::class, 'areaCirculo']);
Route::get('/factorial/{numero}',  [App\Http\Controllers\OperacionesController::class, 'factorial']);
Route::get('/primo/{numero}', [App\Http\Controllers\OperacionesController::class, 'esPrimo']);
Route::get('/amigos/{num1}/{num2}', [App\Http\Controllers\OperacionesController::class, 'amigos']);
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/saludo', function () {
    return view('saludoht');
});

