<?php

//this é usado para a instancia atual do objeto
//podendo assim alterar propriedade ou invocar um método


class Pessoa{
    public $nome;

    function escolherNome($nome){
        $this->nome = $nome; //acessando a prop  nome do obj
        
    }
    function falar(){
        return "oi";
    }
    function falarAlto(){
        return strtoupper($this->falar()); //acionando o metodo
    }
}

$Rayssa = new Pessoa;
$Rayssa -> escolherNome("Rayssa"); //definindo o value da var
echo $Rayssa->nome; //acessando a var
echo "\n". $Rayssa->falarAlto();