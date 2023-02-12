<?php
//array_reduce -> tem como objetivo reduzir um array a apenas um valor
//podemos passarr uma segunda função como parametro para algum processo ser executado
//array_reduce($arr, $funcao)


$arr = [1,2,3,4,5];

function soma ($a, $b){
    return $a + $b;
};

//nesse caso ele irá somar todos os itens 
$resultado = array_reduce($arr, "soma");

echo "$resultado \n";