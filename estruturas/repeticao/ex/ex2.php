<?php

/*
*  Criar loop até 30
*  Contador deve começar em 4
*  Incrementar de 2 em 2
*  Caso chegue em 24, use o break
*/

$i = 4;


while($i <= 30){

    echo "O contador é $i e não é menor ou igual a 30 e não é 24\n";   
    if ($i == 24){ 
        echo "O contador é $i, atingi meu objetivo";
        break;}
    $i+= 2;

}