<?php 

include "vendor/autoload.php";

// ANOTAÇÃO
// A função substr_replace no PHP é usada para substituir uma parte de uma string por outra string.
//  Ela recebe quatro parâmetros: a string original, a string de substituição, a posição inicial
//   para a substituição, e o número de caracteres a serem substituídos (0 para inserir sem substituir).
//    É útil para inserir ou substituir substrings em posições específicas.

use App\App\PessoaFisica;
use App\App\PessoaJuridica;

$PessoaJurica = new PessoaJuridica("EmpresasAlaba","43.554.653/0001-54");
$PessoaFisica = new PessoaFisica("Alaba","190.989.456-13");

var_dump(
    $PessoaJurica->documetoFormatado(),
    $PessoaFisica->documetoFormatado(),
);