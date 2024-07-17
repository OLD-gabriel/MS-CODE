<?php 

include "vendor/autoload.php";

use App\Pessoa;

$Pessoa = new Pessoa("gabriel",18,"HELICOPETRO");

echo "<pre>";
print_r($Pessoa);
echo "</pre>";