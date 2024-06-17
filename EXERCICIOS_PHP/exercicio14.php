<?php
    // MS CODE --- GABRIEL CIRQUEIRA
    // 14 – Escreva um algoritmo que receba o valor de um produto, acrescente 16% a esse valor, divida em 10 parcelas e mostre para o usuário o valor da parcela e o valor total da compra.
    function calculaParcelas($valor) {
        $valorAcrescido = $valor * 1.16;
        $valorParcela = $valorAcrescido / 10;
        return array($valorParcela, $valorAcrescido);
    }
    list($parcela, $total) = calculaParcelas(1000);
    echo "Valor da parcela: $parcela, Valor total: $total";