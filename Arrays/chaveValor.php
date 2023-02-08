<?php
//em arrays associativos, é importante trabalhar com chaves e valores de forma separada, onde entra a necessidade de algumas funções
//array_keys -> retorna as chaves
//array_values -> retorna os valores

$arr = [
    'nome' => 'Rayssa',
    'idade' => 25
];

print_r(array_keys($arr));
echo "\n";
print_r(array_values($arr));