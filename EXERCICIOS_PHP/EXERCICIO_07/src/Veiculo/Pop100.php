<?php

namespace App\Veiculo;

class Pop100 implements Veiculo
{

    public function QuatidadeDeRodas(): string
    {
        return "2 RODAS";
    }
    public function TipoVeiculo(): string
    {
        return "MOTO";
    }
    public function NomeVeiculo(): string
    {
        return "Pop100";
    }
    public function Descricao(): string
    {
        return "Honda Pop100, moto econômica e prática para o dia a dia";
    }

    // public function SabeDiriji(): bool
    // {
    //     return true;
    // }
}
