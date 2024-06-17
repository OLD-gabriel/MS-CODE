<?php
    // MS CODE --- GABRIEL CIRQUEIRA
    // 15 – Escreva um algoritmo que receba de entrada a distância total (em km) percorrida por um automóvel e a quantidade de combustível (em litros) consumida para percorrê-la, calcule e imprima o consumo médio de combustível. Fórmula: Consumo médio = Km / litros.
    function calculaConsumoMedio($distancia, $litros) {
        $consumoMedio = $distancia / $litros;
        return $consumoMedio;
    }
    echo calculaConsumoMedio(500, 50);