<?php
    // MS CODE --- GABRIEL CIRQUEIRA
    // 13 – Escreva um algoritmo que leia 3 notas de um aluno e calcule a média final deste aluno, considerando que a média é ponderada, ou seja, o peso das notas são, respectivamente, 2, 3 e 5.
    function calculaMediaPonderada($nota1, $nota2, $nota3) {
        $media = (($nota1 * 2) + ($nota2 * 3) + ($nota3 * 5)) / 10;
        return $media;
    }
    echo calculaMediaPonderada(6, 7, 8);