<?php

//  percorrer cada um dos caracteres utilizando uma
//  estrutura de repetição eo metodo strlen para saber o numero de caracteres;

$str = "Testando isso aqui";

for($x = 0; $x < strlen($str);$x++){
    echo "$str[$x] \n";
};