<?php 
    function calculaPorcentagens($valor) {
        $cincoPorCento = $valor * 0.05;
        $cinquentaPorCento = $valor * 0.50;
        return array($cincoPorCento, $cinquentaPorCento);
    }
    list($cinco, $cinquenta) = calculaPorcentagens(200);
    echo "5%: $cinco, 50%: $cinquenta";