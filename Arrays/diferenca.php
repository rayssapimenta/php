<?php
$arr = [1, 2 ,3 ,4 ,5];
$arr2 = range(1,5);
$arr[] = 7;


$arrDiff = array_diff($arr, $arr2);
//retorna as diferenças de um array

print_r($arrDiff);