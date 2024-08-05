<?php

namespace App\Veiculo;

class Touro implements Veiculo
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
        return "Touro";
    }
    public function Descricao(): string
    {
        return "Fiant Touro, carro que anda na terra e na água";
    }

    // public function SabeDiriji(): bool
    // {
    //     return true;
    // }
}
