<?php
//crie vars com caracts de algum obj
//dps crie um array com compact 
//faça um loop no array e imprima os valores

$cor = 'vermelho';
$forma = 'retangular';

$arr = compact('cor', 'forma');
print_r($arr);

foreach ($arr as $caracteristica => $value){
    echo "$caracteristica : $value" . "\n";
}