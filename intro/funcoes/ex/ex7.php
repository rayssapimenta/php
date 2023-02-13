<?php
/*
    crie uma função que recebe um array de números
    crie um novo array com apenas os numeros que são maiores que 7
    Retorne este novo array e imprima na tela

    array_push -> adiciona itens a um array
        array_push($nomeArray, 'item','item1');
*/


// Defini o array dos numeros
$arr = []; 

//Criei um loop para inserir os numeros do array
for($i = 0;$i <= 30;$i++ ){

    array_push($arr, $i);

}; 

//Criação da função que vai criar outro array a partir do indice 7
function arrays($arr){
    
    $arrMaior=[];
    //loop para interagir com o indice do array
    for ($j = 0; $j < count($arr); $j++) {
        
        if($arr[$j] > 7){
            
            array_push($arrMaior, $arr[$j]);
            
        };
    };
    
    return $arrMaior;
};

var_dump(arrays($arr));