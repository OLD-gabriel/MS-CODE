<?php 
    function calculaDesconto7($valor) {
        $desconto = $valor * 0.07;
        $valorComDesconto = $valor - $desconto;
        return array($valor, $desconto, $valorComDesconto);
    }
    list($original, $desconto, $comDesconto) = calculaDesconto7(200);
    echo "Valor original: $original, Desconto: $desconto, Valor com desconto: $comDesconto";