<?php
    // MS CODE --- GABRIEL CIRQUEIRA
    // 9 – Escreva um algoritmo que receba o valor de um produto e calcule um desconto de 7%, exibindo para o usuário o valor original, o valor do desconto e o valor com o desconto.
    function calculaDesconto7($valor) {
        $desconto = $valor * 0.07;
        $valorComDesconto = $valor - $desconto;
        return array($valor, $desconto, $valorComDesconto);
    }
    list($original, $desconto, $comDesconto) = calculaDesconto7(200);
    echo "Valor original: $original, Desconto: $desconto, Valor com desconto: $comDesconto";