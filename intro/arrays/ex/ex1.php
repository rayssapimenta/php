<?php
//crie array com range de 10 a 45;
//imprima todos os numeros com uma soma de 6
//se passar de 30 a soma, imprima que o numero é muito alto

$arr = range(10, 45);

for ($i = 0 ; $i < count($arr); $i++){

    $soma = $arr[$i] + 6;

    if($soma > 30){
        echo "O número $soma é muito alto \n";
    }else{
        echo "Soma \n";
    }
}