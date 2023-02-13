<?php
//crie uma função que recebe caracteristicas de algum objeto como argumento (carro, sofá, cafeteira), em array associativo;
//O array deve conter nome => preço;
//Retorne apenas os itens que custam mais que R$10
//imprima o retorno
$objetos = [
    'cadeira' => 25,
    'sofá' => 250,
    'lápis' => 2.50,
    'cama' => 150
];

function objetos($arr){
    $resultado = [];
    
    foreach($arr as $item => $preco){
    
        if($preco > 10){
            array_push($resultado, $item);
        }
    }
    return $resultado;
}
var_dump(objetos($objetos));