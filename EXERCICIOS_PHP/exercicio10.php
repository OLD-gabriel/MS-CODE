<?php
    // MS CODE _ GABRIEL CIRQUEIRA
    // 10 – Escreva um algoritmo que calcule e apresente o volume de uma caixa retangular por meio da seguinte fórmula: volume = comprimento x largura x altura.
    function calculaVolume($comprimento, $largura, $altura) {
        return $comprimento * $largura * $altura;
    }
    echo calculaVolume(2, 3, 4);