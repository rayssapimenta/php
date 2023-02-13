<?php
//dividir um array em diversos arrays de numero de elementos iguais
//array_chunk
//passamos o array como argumento e também o numero de elementos de cada array deve ter

$arr = range(1,20);

print_r(array_chunk($arr,4));