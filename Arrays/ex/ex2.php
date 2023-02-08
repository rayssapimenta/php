<?php
/*
    Crie um array multidimensional com 3 arrays que tem 4 elementos cada
    Imprima todos os elementos de cada um dos arrays
    Imprima também quando está mudando de array
*/

$arr = [
    [1,2,3,4],
    [1,2,3,4],
    [1,2,3,4],
    [1,2,3,4]
];
//echo count($arr);

//loop no array externo 
for($i = 0; $i < count($arr); $i++){

    echo "Imprimindo o array externo :".($i+1)."\n";
//loop no array interno 
    for($j = 0; $j < count($arr[$i]); $j++){
    
        echo "item {$j}: ".$arr[$i][$j]."\n";
    
    };
};