<?php
function verificarParImpar($numero) {
    if ($numero % 2 == 0) {
        return "$numero e par. <br>";
    } else {
        return "$numero é ímpar. <br>";
    }
}

function verificarPositivoNegativo($numero) {
    if ($numero >= 0) {
        return "$numero é positivo.";
    } else {
        return "$numero é negativo.";
    }
}

$numero = -3;

echo verificarParImpar($numero);
echo verificarPositivoNegativo($numero);
