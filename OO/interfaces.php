<?php
    //cria um modelo de definição de uma classe
    //se uma classe implementar uma interface, ela obrigatoriamente deverá implementar seus metodos e propriedades
    //palavra reservada : 
    //      implements para associar
    //      interfaces para criar
    interface Caracteristicas{
        const nome = "Rayssa";

        public function falar();
    }
    
    class Humano implements Caracteristicas{
        public function falar(){
            echo "olá";
        }
        public function falarNome(){
            echo self::nome;
        }
    }

$Rayssa = new Humano;
$Rayssa -> falar();
echo "\n";
$Rayssa -> falarNome();