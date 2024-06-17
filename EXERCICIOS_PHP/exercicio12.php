<?php
    // MS CODE --- GABRIEL CIRQUEIRA
    // 12 – Escreva um algoritmo que receba dois valores, calcule e apresente a área de um trapézio.
    function calculaAreaTrapezio($baseMaior, $baseMenor, $altura) {
        $area = (($baseMaior + $baseMenor) * $altura) / 2;
        return $area;
    }
    echo calculaAreaTrapezio(5, 3, 4);