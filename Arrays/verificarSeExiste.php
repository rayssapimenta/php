<?php

// com a função array_key_exists podemos verificar se há um valor em uma respectiva key de um array
//Usando if, ou o isset

$arr = [
    'nome' => 'Rayssa',
    'idade' => 25
];

if(array_key_exists("nome",$arr)){
    echo 'A chave existe';
}else{
    echo 'A chave não existe';
};


echo "\n";


if(array_key_exists("sobrenome",$arr)){
    echo 'A chave existe';
}else{
    echo 'A chave não existe';
};

if(isset($arr["nome"])){
    echo 'A chave existe isset';
}else{
    echo 'A chve não existe';
};
