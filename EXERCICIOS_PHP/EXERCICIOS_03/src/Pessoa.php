<?php

namespace App;
class Pessoa {
    
    private $nome;
    private $idade;
    private $genero;

    // Construtor
    public function __construct($nome, $idade, $genero) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->genero = $genero;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function exibirdados() {
        echo "Nome: " . $this->getNome() . "<br>";
        echo "Idade: " . $this->getIdade() . "<br>";
        echo "Gênero: " . $this->getGenero() . "<br>";
    }
}


