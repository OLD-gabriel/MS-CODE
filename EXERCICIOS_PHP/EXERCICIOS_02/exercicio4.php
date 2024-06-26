<?php
function calcularAntecessorSucessor($numero) {
    $antecessor = $numero - 1;
    $sucessor = $numero + 1;
    
    return array($antecessor, $sucessor);
}

$numero = 10;

list($antecessor, $sucessor) = calcularAntecessorSucessor($numero);

echo "O antecessor de $numero é: $antecessor <br>";
echo "O sucessor de $numero é: $sucessor";
