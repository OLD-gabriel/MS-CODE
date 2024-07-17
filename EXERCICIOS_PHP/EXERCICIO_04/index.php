<?php 

include "vendor/autoload.php";

use App\Carro;

// CALCULAR A IDADE DO CARRO A CLASSE LÁ, E DEPOIS EXIBIR COM SPRINFTF, E AINDA USAR O __TOSTRING

$carro = new Carro("VOLKSVAKEIN","FIAT UNO","2006","PRETO","ABG5464");

echo "<pre>";
print_r($carro);
echo "</pre>";

echo "<br>";

$carro->GetIdade();