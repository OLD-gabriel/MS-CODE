<?php 

include "vendor/autoload.php";

use App\Calculadora;

try {
    $calculadora = new Calculadora();
    // echo $calculadora->adicionar(1, 2, 3, 4);
    echo "<br>";
    // echo $calculadora->subtrair(10, 2, 3);
    echo "<br>";
    // echo $calculadora->multiplicar(1,3);
    echo "<br>";
    echo $calculadora->dividir(2,0);

} catch (Exception $e) {
    echo 'Erro: ' . $e->getMessage();
}