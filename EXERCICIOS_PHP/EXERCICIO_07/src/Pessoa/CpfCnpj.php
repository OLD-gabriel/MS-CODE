<?php

namespace App\Pessoa;

class CpfCnpj
{

    public static function removerCaracteres($documento): string
    {
        return str_replace(['.', '-', '/'], '', $documento);
    }

    public static function formatarDocumento($documento): string
    {

        if (strlen($documento) === 11) {
            $documento = substr_replace($documento, '.', 3, 0);
            $documento = substr_replace($documento, '.', 7, 0);
            $documento = substr_replace($documento, '-', 11, 0);
        } elseif (strlen($documento) === 14) {
            $documento = substr_replace($documento, '.', 2, 0);
            $documento = substr_replace($documento, '.', 6, 0);
            $documento = substr_replace($documento, '/', 10, 0);
            $documento = substr_replace($documento, '-', 15, 0);
        }

        return $documento;
    }
}
