<?php

//Percorra a string -> O rato roeu a roupa do rei de Roma, em um loop
// e imprima o numero de letra "a" desta string

$str = "O rato roeu a roupa do rei de Roma";

for($i = 0; $i < strlen($str) ;$i++){
    
    if($str[$i] == 'a'){
        echo "{$str[$i]} na posição {$i} \n";
    }
    
    
}