<?php
function calcularSoma($A, $B) {
    return $A + $B;
}

function verificarMenorQueC($soma, $C) {
    if ($soma < $C) {
        return "A soma È menor que C.";
    } else {
        return "a soma não é menor que C.";
    }
}

$A = 10;
$B = 5;
$C = 20;

$soma = calcularSoma($A, $B);
echo "A soma entre A e B é: $soma <br>";

echo verificarMenorQueC($soma, $C);