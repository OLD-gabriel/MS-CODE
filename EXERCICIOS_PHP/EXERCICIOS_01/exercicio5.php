<?php
    function somaDosQuadrados($num1, $num2) {
        $quadrado1 = $num1 * $num1;
        $quadrado2 = $num2 * $num2;
        $soma = $quadrado1 + $quadrado2;
        return $soma;
    }
    echo somaDosQuadrados(3, 4);