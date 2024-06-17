<?php
    // MS CODE --- GABRIEL CIRQUEIRA
    // 6 – Escreva um algoritmo que leia a velocidade de um objeto em m/s (metros por segundo), calcule e exiba para o usuário a velocidade em km/h.
    function converteVelocidade($velocidadeMs) {
        $velocidadeKmh = $velocidadeMs * 3.6;
        return $velocidadeKmh;
    }
    echo converteVelocidade(10);