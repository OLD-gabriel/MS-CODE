<?php

namespace App\App;
class PessoaJuridica extends Pessoa{

    public function documetoFormatado(){
        $doc = $this->documento();

        // $doc = substr_replace($doc, '.', 2, 0);
        // $doc = substr_replace($doc, '.', 6, 0);
        // $doc = substr_replace($doc, '/', 10, 0);
        // $doc = substr_replace($doc, '-', 15, 0);
    
        return CpfCnpj::formatarDocumento($doc);

    }
    
}