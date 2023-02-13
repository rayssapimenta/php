<?php
class Cachorro{

    function latir(){
        echo "auau \n";
    }

    function andar($m){
        echo "estou andando $m metros\n";
    }
}
$chihuaua = new Cachorro;
$dalmata = new Cachorro;

$chihuaua -> latir();
$dalmata ->andar(1100);