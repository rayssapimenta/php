<?php
//array_splice() -> basta indicar o array, o indice e quantia de elementos

$arr = [1 , 2, 3, 4, 5];

print_r(array_splice($arr, 2, 2));

echo "\n";

print_r($arr);