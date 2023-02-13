<?php
//os paramentros já são passados com valores
//Caso não receba valores, os valores default são assumidos

function teste($teste="Valor Default"){
    echo $teste;
};

teste("oi");
echo "\n </br>";
teste();
echo "\n </br>";
//Caso haja mais de um argumento, por padrão os defaults ficam por ultimo p evitar erros

function teste1($a, $b='default'){
    echo "sou o a: $a e o b: $b";
};
teste1('oi');
//caso for passado o valor para deault, o mesmo será sobrescito
echo "\n </br>";
teste1('oi','oi2');