<?php
    // MS CODE --- GABRIEL CIRQUEIRA
    // 2 – Escreva um algoritmo que leia três números nas variáveis Val1, Val2 e Val3, calcule sua média na variável media e exiba para o usuário o resultado.
    function calculaMedia($val1, $val2, $val3) {
        $media = ($val1 + $val2 + $val3) / 3;
        return $media;
    }
    echo calculaMedia(4, 6, 8);