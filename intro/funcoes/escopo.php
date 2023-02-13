<?php
//global -> acessadas de 'qualquer lugar' ...
//local -> restrito ao local que foi declarada
//static -> no caso, força os valores serem mantidos. Como em funções, o padrão é terem seus valores resetados


$a = "Sou uma variavel global";

function teste(){
    $a = "Sou uma variavel local";
    echo $a;
};

echo $a;
echo "\n";
teste();
echo "\n";
function teste2($a){
    $a = 'sou local agr';
    echo $a;
};
teste2($a);
echo "\n";
echo $a;
echo "\n";

function teste3($a){
    static $a = 'sou local agr';
    echo $a;
};
echo $a;
echo "\n";
teste3($a);
echo "\n";
echo $a;
echo "\n";
function teste4(){
    global $a ;
    echo $a."dentro de uma função";
};
teste4();
echo "\n $a";
