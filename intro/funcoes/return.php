<?php
//normalmente se armazenam os resultados em var p usar dps

function soma($a, $b){
    return $a + $b;
};

$teste = soma(2, 5);

//echo $teste;

// e com isso, podemos usar ela como paramentro dps

echo soma($teste, 5);