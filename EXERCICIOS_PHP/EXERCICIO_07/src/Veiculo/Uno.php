<?php

namespace App\Veiculo;

class Uno implements Veiculo
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
        return "Uno";
    }
    public function Descricao(): string
    {
        return "Fiat Uno, carro que é econômico e prático para a cidade";
    }

    // public function SabeDiriji(): bool
    // {
    //     return true;
    // }
}
