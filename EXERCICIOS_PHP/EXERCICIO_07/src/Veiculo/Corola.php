<?php

namespace App\Veiculo;

class Corola implements Veiculo
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
        return "Corola";
    }
    public function Descricao(): string
    {
        return "Toyota Corola, carro confortável e confiável para viagens longas e uso diário";
    }

    // public function SabeDiriji(): bool
    // {
    //     return true;
    // }
}
