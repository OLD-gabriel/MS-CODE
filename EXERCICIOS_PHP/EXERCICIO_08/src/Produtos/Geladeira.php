<?php

namespace App\Produtos;

class Geladeira implements ProdutoInterface
{
    public function tipoProduto(): string
    {
        return "Eletrodomestico";
    }
    public function nomeProduto(): string
    {
        return "Geladeira";

    }
    public function Preco(): float
    {
        return 2099.99;
    }

    public function ehMovel(): bool
    {
        return False;
    }

}
