<?php
class Cachorro{

    function latir(){
        echo "auau \n";
    }

    function andar(){
        echo "estou andando \n";
    }
}
$chihuaua = new Cachorro;
$dalmata = new Cachorro;

$chihuaua -> latir();
$dalmata ->andar();