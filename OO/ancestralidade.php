<?php
//para checar se uma class é filha de alguma
//pode ser usado em if, já que o retorno é um bolean
//instanceof

class Pessoa{

}
class Animal{

}
class Reptil extends Animal{

}
$cobra = new Animal;

if($cobra instanceof Pessoa){
    echo "cobra é uma pessoa \n";
}else{
    echo "cobra não é uma pessoa \n";
}


if($cobra instanceof Animal){
    echo "cobra é um animal \n";
}else{
    echo "cobra não é um animal \n";
}
