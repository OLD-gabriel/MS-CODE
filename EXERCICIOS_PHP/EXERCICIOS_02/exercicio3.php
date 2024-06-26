<?php
function calcularCê($A, $B) {
    if ($A == $B) {
        return $A + $B;
    } else {
        return $A * $B;
    }
}

$A = 5;
$B = 5;

$C = calcularCê($A, $B);
echo "O valor de C é: $C";
