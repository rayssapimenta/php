<?php

//crie operações que usem as 4 operações, armazene em var e imprima.


function soma($valor1, $valor2){
    echo "A soma de $valor1 e $valor2 é : ".$valor1+$valor2;
    echo"<br/>";
;}

function subtracao($valor1, $valor2){
    echo "A subtração de $valor1 e $valor2 é : ".$valor1-$valor2;
    echo"<br/>";
};

function multiplicacao($valor1, $valor2){
    echo "A multiplicação de $valor1 e $valor2 é : ".$valor1*$valor2;
    echo"<br/>";
};

function divisao($valor1, $valor2){
    echo"A divisão de $valor1 e $valor2 é : ".$valor1/$valor2;
    echo"<br/>";
};

$num1 = 25;
$num2 = 35;

soma($num1,$num2);
subtracao($num1,$num2);
multiplicacao($num1,$num2);
divisao($num1,$num2);