<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    public function multiplicar($num1, $num2)
    {
        $resultado = $num1 * $num2;
        return "El resultado de la multiplicación es: " . $resultado;
    }
    public function dividir($num1, $num2)
    {
        $resultado = $num1 / $num2;
        return "El resultado de la división es: " . $resultado;
    }
    public function cuadratica($a, $b, $c)
    {
        $discriminante = pow($b, 2) - 4 * $a * $c;
        $raiz = sqrt($discriminante);
        $x1 = (-$b + $raiz) / (2 * $a);
        $x2 = (-$b - $raiz) / (2 * $a);
        return "El resultado de x1 es: " . $x1 . " y el resultado de x2 es: " . $x2;
    }
    public function areaTriangulo($base, $altura) {
        $resultado = ($base * $altura) / 2;
        return "El área del triángulo es: $resultado";
    }
    public function areaCirculo($radio) {
        $resultado = pi() * pow($radio, 2);
        return "El área del círculo es: $resultado";
        }
        public function factorial($numero) {
        $res = 1;
        for ($i = 1; $i <= $numero; $i++) { $res *= $i; }
        return "El factorial de $numero es: $res";
}
public function esPrimo($numero) {
        if ($numero <= 1) return "$numero no es primo";
        for ($i = 2; $i < $numero; $i++) {
            if ($numero % $i == 0) return "$numero no es primo";
        }
        return "$numero sí es primo";
    }
    public function amigos($num1, $num2) {
        $suma1 = 0; $suma2 = 0;
        for ($i = 1; $i < $num1; $i++) { if ($num1 % $i == 0) $suma1 += $i; }
        for ($i = 1; $i < $num2; $i++) { if ($num2 % $i == 0) $suma2 += $i; }
        if ($suma1 == $num2 && $suma2 == $num1) return "$num1 y $num2 son amigos";
        return "No son amigos";
    }
public function frm_sumar() {
    return view('frm_sumar');
}


public function sumar(Request $request) {
    $n1 = $request->numero1;
    $n2 = $request->numero2;

    $resultado = $n1 + $n2;

    return "El resultado de la suma es: " . $resultado;
}
// Muestra el formulario de la resta en blanco
public function frm_restar() {
    return view('frm_restar');
}

// Procesa los números y hace la resta
public function restar(Request $request) {
    $n1 = $request->numero1;
    $n2 = $request->numero2;

    $resultado = $n1 - $n2;

    return "El resultado de la resta es: " . $resultado;
}
}
