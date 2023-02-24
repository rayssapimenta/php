<?php

class Car{
    //prop public
    public $rodas = 4;

}
class Mecanico{
    public function alterarRodas($obj){
        $obj -> rodas =10;
    }
}

$carro = new Car;

$Pedro = new Mecanico;

echo $carro->rodas."\n";

$Pedro->alterarRodas($carro);

echo $carro->rodas."\n";