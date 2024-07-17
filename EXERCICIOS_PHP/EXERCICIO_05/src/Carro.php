<?php

namespace App;
use DateTimeImmutable;
class Carro {
    private $ano;
    private $cor;
    private $modelo;

    public function __construct($ano, $cor, $modelo) {
        $this->ano = $ano;
        $this->cor = $cor;
        $this->modelo = $modelo;
    }

    public function getAno() {
        return $this->ano;
    }

    public function getCor() {
        return $this->cor;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function exibirDados() {
        echo "Carro: {$this->modelo} ({$this->cor}, {$this->ano})";
    }
    public function calcularIdade() {
        $dataAtual = new DateTimeImmutable();
        $anoCarro = $this->ano;
        $dataCarro = new DateTimeImmutable("$anoCarro-01-01");
        $diferenca = $dataAtual->diff($dataCarro);
        return $diferenca->y;
    }
}

$meuCarro = new Carro(2010, "Preto", "Fusca");
$meuCarro->exibirDados();
echo "<br>";
echo "Idade do carro: " . $meuCarro->calcularIdade() . " anos";

