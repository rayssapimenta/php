<?php
//função extract criar variaveis rápidamente
//o nome da chave será o nome da variavel
//se já houver a variável, a mesma será sobrescrita

$arr = [
    'cor' => 'vermelha',
    'forma' => 'retangular'
];
extract($arr);

echo $cor . $forma;