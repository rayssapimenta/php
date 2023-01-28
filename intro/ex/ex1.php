<?php
echo 'Rayssa';
    echo"\n";
#funções para confirmar o tipo de dado is_tipo()... retorna um boleano

$teste = 5;
echo is_int($teste);
    echo"\n";
#variavel por referencia? a var referenciada muda de valor conforme a referencia
        // simbolo é     = &
$x = 2;
$y = &$x;

echo $x;
    echo"\n";
echo $y;
    echo"\n";
$x = 5;

echo $x;
    echo"\n";
echo $y;
    echo"\n";
