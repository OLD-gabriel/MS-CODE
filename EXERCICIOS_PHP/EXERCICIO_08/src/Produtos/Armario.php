<?php

namespace App\Produtos;

class Armario implements ProdutoInterface
{
    public function tipoProduto(): string
    {
        return "MOVEL";
    }
    public function nomeProduto(): string
    {
        return "Armario";

    }
    public function Preco(): float
    {
        return 1099.99;
    }

    public function ehMovel(): bool
    {
        return false;
    }

}
