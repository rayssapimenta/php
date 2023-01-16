<?php

/*  OBJETOS
    2 caract fundamentais: 
            metodos -> ações 
            propriedades -> caracterisrticas

    precisam de um molde !!!!! -> classes */
    
class Pessoa{

    function falar(){
        echo "Olá, pessoal! ";
    }

}

//criar um obj a partir do molde -> instanciar 

$Rayssa = new Pessoa();

//adicionar uma propriedade ao obj 
$Rayssa -> nome = "Rayssa";

//imprimir uma caract do obj
echo $Rayssa -> nome;

$Rayssa -> falar();

