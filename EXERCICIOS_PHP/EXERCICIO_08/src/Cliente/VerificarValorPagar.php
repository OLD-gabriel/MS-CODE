<?php

namespace App\Cliente;

use App\Produtos\ProdutoInterface;

class VerificarValorPagar
{

    public static function execute(ProdutoInterface $produto): Float
    {
        if ($produto->tipoProduto() == "MOVEL") {
            return (($produto->Preco() - ($produto->Preco() * 0.1)));
        }
        return $produto->Preco();
    }
}
