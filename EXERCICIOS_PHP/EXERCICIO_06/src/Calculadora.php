<?php

namespace App;
use Exception;

class Calculadora { 

    public function adicionar(...$numeros) {
        return array_sum($numeros);
    }
 
    public function subtrair(...$numeros) {
        if (count($numeros) < 1) {
            throw new Exception("Pelo menos um número é necessário.");
        }

        $resultado = array_shift($numeros);
        foreach ($numeros as $numero) {
            $resultado -= $numero;
        }
        return $resultado;
    }

    public function multiplicar(...$numeros) {
        if (count($numeros) < 2) {
            throw new Exception("Pelo menos um número é necessário.");
        }

        $resultado = array_shift($numeros);
        foreach ($numeros as $numero) {
            $resultado *= $numero;
        }
        return $resultado;
    }
 
    public function dividir(...$numeros) {
        if (count($numeros) < 2) {
            throw new Exception("Pelo menos um número é necessário.");
        }

        $resultado = array_shift($numeros);
        foreach ($numeros as $numero) {
            if ($numero == 0) {
                throw new Exception("Divisão por zero não é permitida.");
            }
            $resultado /= $numero;
        }

        return $resultado;
    }
}
 

