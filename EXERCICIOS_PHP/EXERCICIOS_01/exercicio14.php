<?php 
    function calculaParcelas($valor) {
        $valorAcrescido = $valor * 1.16;
        $valorParcela = $valorAcrescido / 10;
        return array($valorParcela, $valorAcrescido);
    }
    list($parcela, $total) = calculaParcelas(1000);
    echo "Valor da parcela: $parcela, Valor total: $total";