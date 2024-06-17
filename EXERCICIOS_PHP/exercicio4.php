<?php
    // MS CODE --- GABRIEL CIRQUEIRA
    // 4 – Escreva um algoritmo que receba um valor, calcule e mostre para o usuário 5% e 50% deste valor.
    function calculaPorcentagens($valor) {
        $cincoPorCento = $valor * 0.05;
        $cinquentaPorCento = $valor * 0.50;
        return array($cincoPorCento, $cinquentaPorCento);
    }
    list($cinco, $cinquenta) = calculaPorcentagens(200);
    echo "5%: $cinco, 50%: $cinquenta";