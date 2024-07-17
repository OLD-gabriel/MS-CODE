<?php 

namespace App\App;

class PessoaFisica extends Pessoa {
    

    public function documetoFormatado(){
        $doc = $this->documento();

        // $doc = substr_replace($doc, '.', 3, 0); 
        // $doc = substr_replace($doc, '.', 7, 0); 
        // $doc = substr_replace($doc, '-', 11, 0);


    
        return CpfCnpj::formatarDocumento($doc);
    }
}