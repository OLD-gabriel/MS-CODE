<?php

namespace App\Pessoa;

class PessoaJuridica extends Pessoa
{
    private $veiculos;
    public function __construct(string $nome, string $documento, array $veiculos)
    {
        parent::__construct($nome, $documento);
        $this->veiculos = $veiculos;
    }

    public function documetoFormatado()
    {
        $doc = $this->documento();

        // $doc = substr_replace($doc, '.', 2, 0);
        // $doc = substr_replace($doc, '.', 6, 0);
        // $doc = substr_replace($doc, '/', 10, 0);
        // $doc = substr_replace($doc, '-', 15, 0);

        return CpfCnpj::formatarDocumento($doc);

    }

    public function exibirVeiculos(): void
    {
        echo "VEICULOS DA EMPRESA: " . PHP_EOL;
        foreach ($this->veiculos as $veiculo) {
            echo PHP_EOL;
            echo $veiculo->NomeVeiculo();
        }
    }

}
