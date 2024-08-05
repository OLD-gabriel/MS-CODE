<?php

namespace App\Pessoa;

use App\Veiculo\Pop100;
use App\Veiculo\Veiculo;

class PessoaFisica extends Pessoa
{

    private $idade;

    public function __construct(string $nome, string $documento, int $idade)
    {
        parent::__construct($nome, $documento);
        $this->idade = $idade;
    }

    public function documetoFormatado(): string
    {
        $doc = $this->documento();

        // $doc = substr_replace($doc, '.', 3, 0);
        // $doc = substr_replace($doc, '.', 7, 0);
        // $doc = substr_replace($doc, '-', 11, 0);

        return CpfCnpj::formatarDocumento($doc);
    }

    public function sabeDirige(): bool
    {
        if ($this->idade >= 18 && $this->idade < 80) {
            return true;
        }
        return false;
    }

    public function carro(Veiculo $veiculo): void
    {

        if ($veiculo instanceof Pop100) {
            $MarcaHonda = true;
        } else {
            $MarcaHonda = false;
        }

        echo $veiculo->QuatidadeDeRodas() . PHP_EOL;
        echo $veiculo->Descricao() . PHP_EOL;
        echo PHP_EOL;

        if ($this->sabeDirige()) {
            if ($MarcaHonda) {
                echo "{$this->nome} TEM IDADE PARA DIRIGIR, MAS NÃO ACEITA DIRIGIR HONDA";
            } else {
                echo "{$this->nome} TEM IDADE PARA DIRIGIR, E ACEITA DIRIGIR O CARRO SELECIONADO";
            }
        } else {
            echo "{$this->nome} NÃO TEM IDADE PARA DIRIGIR";
        }
    }
}
