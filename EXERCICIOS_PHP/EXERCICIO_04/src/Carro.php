<?php 

namespace App;

use DateTimeImmutable;

class Carro {
    private string $cor;
    private string $modelo;
    private string $nome;
    private $ano;
    private string $placa;

    public function __construct(
        $modeloRecebido,
        $nomeRecebido,
        $anoRecebido,
        $corRecebido,
        $placaRecebido){

        $this->ano = $anoRecebido;
        $this->cor = $corRecebido; 
        $this->modelo = $modeloRecebido; 
        $this->nome = $nomeRecebido; 
        $this->placa = $placaRecebido; 
    }

    public function placa(){
        return $this->placa;
    }

    public function ano(){
        return $this->ano;
    }

    public function cor(){
        return $this->cor;
    }

    public function modelo(){
        return $this->modelo;
    }

    public function nome(){
        return $this->nome;
    }

    public function GetIdade(){
        $DataAtual = new DateTimeImmutable("now");
        $data = $DataAtual->format("Y-m-d");
        $DataOriginal = new DateTimeImmutable();


        $DataOriginal->format($this->ano());

        $CarroAno = $DataAtual->diff($this->ano());
        
        echo "<pre>";
        print_r($DataOriginal);
        echo "</pre>";
    }
}