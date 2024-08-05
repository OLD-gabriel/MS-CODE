<?php

include "vendor/autoload.php";

// ANOTAÇÃO
// A função substr_replace no PHP é usada para substituir uma parte de uma string por outra string.
//  Ela recebe quatro parâmetros: a string original, a string de substituição, a posição inicial
//   para a substituição, e o número de caracteres a serem substituídos (0 para inserir sem substituir).
//    É útil para inserir ou substituir substrings em posições específicas.

// criasr um metodo na classe pessoa, noem  ue quiser, mas, essa pessoa vai precisar saber se ela sabe dirigir aquele carrro,
// retornado um boelan, a interface na ovai ser carro, e veiculo, com quantidade de rodas, se pilota ou digiri, e uma descrição

// one day space gray

//ADICIONAR NA PESSOA JURIDICA, UM METODO QUE VAI RETORNAR UMA LISTA DE VEICUKLOS, E VAI TER UM PROPRIEDADE TÁ, SÓ UMA DICA

use App\Pessoa\PessoaFisica;
use App\Pessoa\PessoaJuridica;
use App\Veiculo\Corola;
use App\Veiculo\Fox;
use App\Veiculo\Hornet;
use App\Veiculo\Uno;

$veiculos = [new Fox, new Hornet, new Corola];

$PessoaJurica = new PessoaJuridica("EmpresasAlaba", "43.554.653/0001-54", $veiculos);

$PessoaFisica = new PessoaFisica("Alaba", "190.989.456-13", 19);

// echo $PessoaFisica->carro(new Pop100);

echo $PessoaJurica->exibirVeiculos();
