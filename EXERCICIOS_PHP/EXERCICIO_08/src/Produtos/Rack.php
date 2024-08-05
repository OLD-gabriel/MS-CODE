<?php

namespace App\Produtos;

class Rack implements ProdutoInterface
{
    public function tipoProduto(): string
    {
        return "MOVEL";
    }
    public function nomeProduto(): string
    {
        return "Rack";

    }
    public function Preco(): float
    {
        return 599.99;
    }

    public function ehMovel(): bool
    {
        return true;
    }

}
