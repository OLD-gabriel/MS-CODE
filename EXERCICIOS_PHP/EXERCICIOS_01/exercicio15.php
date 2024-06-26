<?php 
    function calculaConsumoMedio($distancia, $litros) {
        $consumoMedio = $distancia / $litros;
        return $consumoMedio;
    }
    echo calculaConsumoMedio(500, 50);