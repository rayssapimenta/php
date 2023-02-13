<?php

$a = 5;
$b = '6';

function testaIf($x){
    $a = $x;
    if(is_int($a)){
        $a *= 2;
        if($a > 100){
           echo 'maior que 100';
        }else{
            echo 'menor que 100';
        }
    }else{
        echo 'não é inteiro';
    }
    echo "<br/><br/>";

}
testaIf($a);
testaIf($b);
