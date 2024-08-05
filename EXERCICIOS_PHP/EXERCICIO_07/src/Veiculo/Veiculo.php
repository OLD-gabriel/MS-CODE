<?php

namespace App\Veiculo;

interface Veiculo
{

    public function QuatidadeDeRodas(): string;
    public function TipoVeiculo(): string;
    public function NomeVeiculo(): string;
    public function Descricao(): string;
}
