<?php

include "vendor/autoload.php";

use App\Cliente\Cliente;
use App\Produtos\Rack;
use App\Produtos\Telefone;

$ProdutoDoCliente = new Cliente(new Rack);

echo $ProdutoDoCliente->precoPagar();
