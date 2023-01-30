<?php

//criar array com valores int de 10 a 100
//incremento de 1 em 1
//loop no array  -> se chegar em 30 ou 40, pular para a proxima execução

$arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$i = 0;
while ($i < count($arr)) {
    

    if($arr[$i] == 30|| $arr[$i] == 40){
        
        $i++;
        continue;
    };
    echo $arr[$i] . "\n";
    $i++;
}