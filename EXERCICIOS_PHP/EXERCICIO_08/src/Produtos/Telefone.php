<?php

namespace App\Produtos;

class Telefone implements ProdutoInterface
{
    public function tipoProduto(): string
    {
        return "Eletrônico";
    }
    public function nomeProduto(): string
    {
        return "Telefone";

    }
    public function Preco(): float
    {
        return 8999.99;
    }

    public function ehMovel(): bool
    {
        return False;
    }

}
