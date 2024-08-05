<?php

namespace App\Veiculo;

class Hornet implements Veiculo
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
        return "Hornet";
    }
    public function Descricao(): string
    {
        return "Honda Hornet, moto ágil e potente para uso urbano e estradas";
    }

    // public function SabeDiriji(): bool
    // {
    //     return true;
    // }
}
