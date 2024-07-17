<?php 

namespace App\App;
use App\App\CpfCnpj;

abstract class Pessoa {
    protected string $nome;
    protected string $documento;

    public function __construct(
        string $nome,
        string $documento
    ){
        $this->nome = $nome;
        $this->documento = CpfCnpj::removerCaracteres($documento);
    }

    public function documento(){
        return $this->documento;
    }

    abstract public function documetoFormatado();

}