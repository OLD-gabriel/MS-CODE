<?php 
    function calculaAreaTrapezio($baseMaior, $baseMenor, $altura) {
        $area = (($baseMaior + $baseMenor) * $altura) / 2;
        return $area;
    }
    echo calculaAreaTrapezio(5, 3, 4);