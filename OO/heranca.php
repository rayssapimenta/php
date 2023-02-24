<?php
//herda as prop e metodos de uma class
// caracterizado por extends


class Pessoa{
    public $nome;

    public function falar(){
        echo "oi \n";
    }
}
class Programador extends Pessoa{

}

$ze = new Pessoa;
$Rayssa = new Programador;

$ze -> falar();;
$Rayssa -> falar();
