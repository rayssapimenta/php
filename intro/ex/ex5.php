<?php


function operacoes($a, $b){

    $soma = $a + $b;
    $subtracao = $a - $b;
    $divisao = $a / $b;
    $multiplicacao = $a * $b;
    $modulo = $a % $b;
    $exponencial = $a ** $b;

    echo "Soma: " .$soma .
        "<br/> Subtração: ".$subtracao.
        "<br/> Divisão: ".$divisao.
        "<br/> Multiplicação: ".$multiplicacao.
        "<br/> Módulo: ".$modulo.
        "<br/> Exponecial: ".$exponencial;
}

operacoes(23,12);