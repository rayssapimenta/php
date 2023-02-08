<?php
//é um array dentro de outro array, temos um array multidimensional, o mesmo que matriz
// Para acessar este tipo de array também utilizamos indices, o externo e depois os internos

//ex: 
//    $arr [1][0] -> o primeiro elemento do segundo array
$arr = [
    [1, 2, 3],
    [2, 4, 6],
    [3, 6, 8]
];

var_dump($arr);
echo "\n";
echo $arr[2][2]; // indice 2 do array 2