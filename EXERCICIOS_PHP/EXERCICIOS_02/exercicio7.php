<?php

/*
A sequência de Fibonacci é uma série de números inteiros em que
cada número é a soma dos dois anteriores, começando com 0 e 1.
Ela tem várias propriedades interessantes e aparece em diferentes
áreas da matemática e da natureza, como no crescimento de populações
de coelhos, na estrutura de flores e na espiral das conchas.
*/ 
function fibonaci($n) {
    if ($n == 0) {
        return 0;
    } else if ($n == 1) {
        return 1;
    } else {
        return fibonaci($n - 1) + fibonaci($n - 2);
    }
}
 
$n = 10;
$valor = fibonaci($n);
echo "O $n º número de fibonaci é: $valor ";