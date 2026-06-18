<?php

namespace App\Http\Controllers;
use App\Models\Suma;
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
        if ($num2 == 0) {
            return "No se puede dividir entre cero.";
        }

        $resultado = $num1 / $num2;
        return "El resultado de la división es: " . $resultado;
    }

    public function cuadratica($a, $b, $c)
    {
        $discriminante = pow($b, 2) - 4 * $a * $c;

        if ($discriminante < 0) {
            return "No existen soluciones reales.";
        }

        $raiz = sqrt($discriminante);
        $x1 = (-$b + $raiz) / (2 * $a);
        $x2 = (-$b - $raiz) / (2 * $a);

        return "El resultado de x1 es: " . $x1 . " y el resultado de x2 es: " . $x2;
    }

    public function areaTriangulo($base, $altura)
    {
        $resultado = ($base * $altura) / 2;
        return "El área del triángulo es: " . $resultado;
    }

    public function areaCirculo($radio)
    {
        $resultado = pi() * pow($radio, 2);
        return "El área del círculo es: " . $resultado;
    }

    public function factorial($numero)
    {
        if ($numero < 0) {
            return "El factorial no está definido para números negativos.";
        }

        $res = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $res *= $i;
        }

        return "El factorial de $numero es: $res";
    }

    public function esPrimo($numero)
    {
        if ($numero <= 1) {
            return "$numero no es primo";
        }

        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return "$numero no es primo";
            }
        }

        return "$numero sí es primo";
    }

    public function amigos($num1, $num2)
    {
        $suma1 = 0;
        $suma2 = 0;

        for ($i = 1; $i < $num1; $i++) {
            if ($num1 % $i == 0) {
                $suma1 += $i;
            }
        }

        for ($i = 1; $i < $num2; $i++) {
            if ($num2 % $i == 0) {
                $suma2 += $i;
            }
        }

        if ($suma1 == $num2 && $suma2 == $num1) {
            return "$num1 y $num2 son amigos";
        }

        return "No son amigos";
    }

    public function frm_sumar()
    {
        return view('frm_sumar');
    }

    public function sumar(Request $request)
    {
        $suma = new Suma();
        $n1 = $request->input('numero1');
        $n2 = $request->input('numero2');
        $resultado = $n1 + $n2;

        $suma->num1 = $n1;
        $suma->num2 = $n2;
        $suma->resultado = $resultado;
        $suma->save();

        return "El resultado de la suma es: " .$suma->resultado;
    }

    public function frm_restar()
    {
        return view('frm_restar');
    }

    public function restar(Request $request)
    {
        $n1 = $request->input('numero1');
        $n2 = $request->input('numero2');
        $resultado = $n1 - $n2;

        return "El resultado de la resta es: " . $resultado;
    }

    public function frm_multiplicar()
    {
        return view('frm_multiplicar');
    }

    public function multiplicarStore(Request $request)
    {
        $n1 = $request->input('numero1');
        $n2 = $request->input('numero2');
        $resultado = $n1 * $n2;

        return "El resultado de la multiplicación es: " . $resultado;
    }

    public function frm_dividir()
    {
        return view('frm_dividir');
    }

    public function dividirStore(Request $request)
    {
        $n1 = $request->input('numero1');
        $n2 = $request->input('numero2');

        if ($n2 == 0) {
            return "No se puede dividir entre cero.";
        }

        $resultado = $n1 / $n2;
        return "El resultado de la división es: " . $resultado;
    }

    public function frm_cuadratica()
    {
        return view('frm_cuadratica');
    }

    public function cuadraticaStore(Request $request)
    {
        $a = $request->input('a');
        $b = $request->input('b');
        $c = $request->input('c');
        $discriminante = pow($b, 2) - 4 * $a * $c;

        if ($discriminante < 0) {
            return "No existen soluciones reales.";
        }

        $raiz = sqrt($discriminante);
        $x1 = (-$b + $raiz) / (2 * $a);
        $x2 = (-$b - $raiz) / (2 * $a);

        return "El resultado de x1 es: " . $x1 . " y el resultado de x2 es: " . $x2;
    }

    public function frm_circulo()
    {
        return view('frm_circulo');
    }

    public function circuloStore(Request $request)
    {
        $radio = $request->input('radio');
        $resultado = pi() * pow($radio, 2);

        return "El área del círculo es: " . $resultado;
    }

    public function frm_factorial()
    {
        return view('frm_factorial');
    }

    public function factorialStore(Request $request)
    {
        $numero = $request->input('numero');

        if ($numero < 0) {
            return "El factorial no está definido para números negativos.";
        }

        $res = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $res *= $i;
        }

        return "El factorial de $numero es: $res";
    }

    public function frm_primo()
    {
        return view('frm_primo');
    }

    public function primoStore(Request $request)
    {
        $numero = $request->input('numero');

        if ($numero <= 1) {
            return "$numero no es primo";
        }

        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return "$numero no es primo";
            }
        }

        return "$numero sí es primo";
    }

    public function frm_amigos()
    {
        return view('frm_amigos');
    }

    public function amigosStore(Request $request)
    {
        $num1 = $request->input('numero1');
        $num2 = $request->input('numero2');
        $suma1 = 0;
        $suma2 = 0;

        for ($i = 1; $i < $num1; $i++) {
            if ($num1 % $i == 0) {
                $suma1 += $i;
            }
        }

        for ($i = 1; $i < $num2; $i++) {
            if ($num2 % $i == 0) {
                $suma2 += $i;
            }
        }

        if ($suma1 == $num2 && $suma2 == $num1) {
            return "$num1 y $num2 son amigos";
        }

        return "No son amigos";
    }

    public function frm_triangulo()
    {
        return view('frm_triangulo');
    }

    public function trianguloStore(Request $request)
    {
        $base = $request->input('base');
        $altura = $request->input('altura');
        $resultado = ($base * $altura) / 2;

        return "El área del triángulo es: " . $resultado;
    }
}
