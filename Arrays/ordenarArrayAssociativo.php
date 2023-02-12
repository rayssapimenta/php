<?php
//arsort -> ordena pelo valor da chave
//ksort -> ordena pela chave

$pessoa = [
    'nome' => 'Rayssa',
    'idade' => 25
];

arsort($pessoa);
ksort($pessoa);
print_r($pessoa);