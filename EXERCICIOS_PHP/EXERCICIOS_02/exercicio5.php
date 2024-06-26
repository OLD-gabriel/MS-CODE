<?php
function calcularSalariosMinimos($salario_usuario, $salario_minimo) {
    return $salario_usuario / $salario_minimo;
}

$salario_minimo = 1293.20;
$salario_usuario = 3000;

$salarios_minimos = calcularSalariosMinimos($salario_usuario, $salario_minimo);

echo "O usuário ganha aproximadamente $salarios_minimos salários mínimos.";
