<?php 

include "vendor/autoload.php";

use App\Carro;

$meuCarro = new Carro(2010, "Preto", "Fusca");
$meuCarro->exibirDados(); 