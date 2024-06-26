<?php 
    function calculaMediaPonderada($nota1, $nota2, $nota3) {
        $media = (($nota1 * 2) + ($nota2 * 3) + ($nota3 * 5)) / 10;
        return $media;
    }
    echo calculaMediaPonderada(6, 7, 8);