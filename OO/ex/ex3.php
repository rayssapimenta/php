<?php
//crie uma classe Caroo;
//crie algumas prop e também a propriedade velocidade_maxima
//crie o metodo setVelocidadeMaxima
//e tb o getVelocidadeMaxima onde é possivel imprimir a velocidade
class Carro{
    public $velocidade_maxima;
    public $modelo;

    function setVelocidadeMaxima($velocidade){
        $this -> velocidade_maxima = $velocidade;
        
    }
    function getVelocidadeMaxima(){
        echo "Está é a velocidade máxima : {$this->velocidade_maxima}";
    }

}
$gol = new Carro;

$gol->setVelocidadeMaxima(100);
$gol->getVelocidadeMaxima();