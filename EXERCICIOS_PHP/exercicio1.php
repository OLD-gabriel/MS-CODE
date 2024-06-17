<?php
    // MS CODE --- GABRIL CIRQUEIRA
    // 1 – Escreva um algoritmo para somar dois números e multiplicar o resultado pelo primeiro número.
    function somaEMultiplica($num1, $num2) {
        $soma = $num1 + $num2;
        $resultado = $soma * $num1;
        return $resultado;
    }
    echo somaEMultiplica(5, 3);