<?php
//array_slice -> podemos resgatar uma faixa de elemntos de um array
// 3 paramentros = o array, indice inicial e quantos elemntos queremos resgatar


$arr = [2, 4, 6,8];

$slice1 = array_slice($arr, 1,3);

print_r($slice1);