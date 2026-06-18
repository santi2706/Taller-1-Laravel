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

Route::get('/frm_multiplicar', [OperacionesController::class, 'frm_multiplicar']);
Route::post('/multiplicar', [OperacionesController::class, 'multiplicarStore'])->name('multiplicar.store');

Route::get('/frm_dividir', [OperacionesController::class, 'frm_dividir']);
Route::post('/dividir', [OperacionesController::class, 'dividirStore'])->name('dividir.store');

Route::get('/frm_cuadratica', [OperacionesController::class, 'frm_cuadratica']);
Route::post('/cuadratica', [OperacionesController::class, 'cuadraticaStore'])->name('cuadratica.store');

Route::get('/frm_triangulo', [OperacionesController::class, 'frm_triangulo']);
Route::post('/triangulo', [OperacionesController::class, 'trianguloStore'])->name('triangulo.store');

Route::get('/frm_circulo', [OperacionesController::class, 'frm_circulo']);
Route::post('/circulo', [OperacionesController::class, 'circuloStore'])->name('circulo.store');

Route::get('/frm_factorial', [OperacionesController::class, 'frm_factorial']);
Route::post('/factorial', [OperacionesController::class, 'factorialStore'])->name('factorial.store');

Route::get('/frm_primo', [OperacionesController::class, 'frm_primo']);
Route::post('/primo', [OperacionesController::class, 'primoStore'])->name('primo.store');

Route::get('/frm_amigos', [OperacionesController::class, 'frm_amigos']);
Route::post('/amigos', [OperacionesController::class, 'amigosStore'])->name('amigos.store');

// Rutas originales del repositorio del instructor (Sin formularios)
Route::get('/multiplicar/{num1}/{num2}', [OperacionesController::class, 'multiplicar']);
Route::get('/dividir/{num1}/{num2}', [OperacionesController::class, 'dividir']);
Route::get('/cuadratica/{a}/{b}/{c}', [OperacionesController::class, 'cuadratica']);
Route::get('/triangulo/{base}/{altura}', [OperacionesController::class, 'areaTriangulo']);
Route::get('/circulo/{radio}', [OperacionesController::class, 'areaCirculo']);
Route::get('/factorial/{numero}', [OperacionesController::class, 'factorial']);
Route::get('/primo/{numero}', [OperacionesController::class, 'esPrimo']);
Route::get('/amigos/{num1}/{num2}', [OperacionesController::class, 'amigos']);
