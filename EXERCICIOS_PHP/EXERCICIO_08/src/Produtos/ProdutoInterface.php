<?php

namespace App\Produtos;

interface ProdutoInterface
{
    public function tipoProduto(): string;
    public function nomeProduto(): string;
    public function Preco(): float;
    public function ehMovel(): bool;

}
