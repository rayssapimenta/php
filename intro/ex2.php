<?php

#imprima tres numeros inteiros
$n1 = 1;
$n2 = 2;
$n3 = 3;

//echo $n1, $n2, $n3;

#imprimir três float e usar o is_float()
$f1 = 1.5;
$f2 = 2.3;
$f3 = 3.3;

//echo $f1, $f2, $f3;
echo is_float($f3);

#imprima textos usando ' e "
echo 'sou um teste de aspas simples'."\n";
echo "sou um teste de aspas duplas\n";


#crie um array com carac de um carro e imprima duas caracteristicas
//vou usar array associativo 
$arr1 =  [
    'marca' => 'BMW',
    'rodas' => 4,
    'teto_solar' => true,
    'velocidade_max' => 300,
    'blindado' => false
];

//echo $arr1; // echo n imprime array ! Somente se o indice for indicado
//Para imprimir array usa o print_r()
print_r($arr1).'\n';

$marca = $arr1['marca']; //armazenando os dados de um array na var

echo 'Sou um carro da marca '.$marca.' e possuo '.$arr1['rodas'].' rodas';



#Crie um array associativo com caract de uma pessoa e verifique se ela é maior de idade

$pessoa = [
    'nome' => 'Maria',
    'idade' => 25,
];

if ($pessoa['idade'] >= 18){
    echo "\nmaior de idade";
}else{
    echo "\nmenor de idade";
}
