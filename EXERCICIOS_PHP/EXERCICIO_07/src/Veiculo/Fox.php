<?php

namespace App\Veiculo;

class Fox implements Veiculo
{

    public function QuatidadeDeRodas(): string
    {
        return "4 RODAS";
    }
    public function TipoVeiculo(): string
    {
        return "CARRO";
    }
    public function NomeVeiculo(): string
    {
        return "Fox";
    }
    public function Descricao(): string
    {
        return "Volkswagen Fox, carro compacto e versátil para uso urbano";
    }

    // public function SabeDiriji(): bool
    // {
    //     return true;
    // }
}
