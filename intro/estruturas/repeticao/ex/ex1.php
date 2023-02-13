<?php
//criar array com dados mistos e crie um while pra imprimir os que são strings

$arr = [25,'oi',44,'ok',true,'eu'];
$arr_valores = count($arr);


$i = 0;
//echo $arr[$i];
while  ($i < $arr_valores) {
    if(is_string($arr[$i]) == true)
        echo $arr[$i] .' -> É string.'. "\n";
    else 
        echo $arr[$i].' -> Não é string.'. "\n";
    $i++;
}