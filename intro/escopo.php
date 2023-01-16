<?php
//global -> declarada fora de funções e não são acessiveis em funções

$x = 10;

echo "$x global";

function Teste(){
    $x = 5;
    echo "$x local";
};

echo $x;

Teste();
