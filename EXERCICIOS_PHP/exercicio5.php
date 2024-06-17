<?php
    // MS CODE --- GABRIEL CIRQUEIRA
    // 5 – Escreva um algoritmo que leia dois números, calcule o quadrado de cada um, some os quadrados e mostre o resultado.
    function somaDosQuadrados($num1, $num2) {
        $quadrado1 = $num1 * $num1;
        $quadrado2 = $num2 * $num2;
        $soma = $quadrado1 + $quadrado2;
        return $soma;
    }
    echo somaDosQuadrados(3, 4);