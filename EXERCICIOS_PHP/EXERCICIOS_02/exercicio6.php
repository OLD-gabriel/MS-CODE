<?php
function fatorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * fatorial($n - 1);
    }
}
 
$n = 5;
 $valor = fatorial(5);
echo "O fatorial de $n é: $valor ";