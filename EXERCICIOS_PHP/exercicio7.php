<?php
    // MS CODE --- GABRIEL CIRQUEIRA
    // 7 – Escreva um algoritmo que leia a altura e o peso de uma pessoa, calcule o seu IMC (Índice de Massa Corporal) e exiba para o usuário.
    function calculaIMC($peso, $altura) {
        $imc = $peso / ($altura * $altura);
        return $imc;
    }
    echo calculaIMC(70, 1.75);