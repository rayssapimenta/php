<?php
/*
    Crie uma função que recebe um array de itens de supermercado
    retorne este array em forma de string, separando em virgulas
*/

$arr = [
    "Sabonete",
    "Shampoo",
    "Saco de Lixo"
];


function itens($arr){
    $str = '    você levou os itens : ';
    for($i = 0; $i < count($arr); $i++){
        $str.= $arr[$i].',';
    };
    return $str;
};

echo(itens($arr));