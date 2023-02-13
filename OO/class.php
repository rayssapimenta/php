<?php
//criando uma classe 
class Pessoa {
    //propriedades
    public $idade = 0; // declarar prop publica
    //metodos
    function falar(){
        echo "oi\n";
    }
}
$Rayssa = new Pessoa; //instanciando um objeto 

$Rayssa -> falar(); // acessando o método

//echo $Rayssa->idade; //acessando uma prop

$Rayssa->idade = 24; //alterando a propriedade

echo $Rayssa->idade;