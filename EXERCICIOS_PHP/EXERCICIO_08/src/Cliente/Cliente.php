<?php

namespace App\Cliente;

use App\Produtos\ProdutoInterface;

class Cliente
{
    private $produto;

    public function __construct(ProdutoInterface $produto)
    {
        $this->produto = $produto;
    }

    public function precoPagar(): float
    {
        return VerificarValorPagar::execute($this->produto);
    }
}
