<?php 
    function calculaMedia($val1, $val2, $val3) {
        $media = ($val1 + $val2 + $val3) / 3;
        return $media;
    }
    echo calculaMedia(4, 6, 8);