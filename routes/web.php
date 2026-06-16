<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacionesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', function () {
    return view('saludoht');
});

// Formas de formulario (Suma y Resta) que alcanzaron a ver en clase
Route::get('/frm_sumar', [OperacionesController::class, 'frm_sumar']);
Route::post('/sumar', [OperacionesController::class, 'sumar'])->name('sumar.store');

Route::get('/frm_restar', [OperacionesController::class, 'frm_restar']);
Route::post('/restar', [OperacionesController::class, 'restar'])->name('restar.store');

// Rutas originales del repositorio del instructor (Sin formularios)
Route::get('/multiplicar/{num1}/{num2}', [OperacionesController::class, 'multiplicar']);
Route::get('/dividir/{num1}/{num2}', [OperacionesController::class, 'dividir']);
Route::get('/cuadratica/{a}/{b}/{c}', [OperacionesController::class, 'cuadratica']);
Route::get('/triangulo/{base}/{altura}', [OperacionesController::class, 'areaTriangulo']);
Route::get('/circulo/{radio}', [OperacionesController::class, 'areaCirculo']);
Route::get('/factorial/{numero}', [OperacionesController::class, 'factorial']);
Route::get('/primo/{numero}', [OperacionesController::class, 'esPrimo']);
Route::get('/amigos/{num1}/{num2}', [OperacionesController::class, 'amigos']);
