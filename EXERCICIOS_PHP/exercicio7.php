<?php 
    function calculaIMC($peso, $altura) {
        $imc = $peso / ($altura * $altura);
        return $imc;
    }
    echo calculaIMC(70, 1.75);