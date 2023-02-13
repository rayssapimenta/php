<?php

//formas de retornar vários valores.

function testando(){
    $a = 52;
    $b = 104;

    return[$a,$b];
};
//armazenar em uma var pra poder manipular os dados
$a = testando();
print_r ($a);