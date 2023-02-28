<?php
//constantes em classes
//São parecidas com variáveis, salvam valores em memoria
//porém, o seu valor não podera ser alterado
//ex:
//  public const CHAVE_API = "ASO793mJJs39";
const NOME = 'Ana'."\n";; // Sempre maiúsculas

<<<<<<< HEAD
echo nome;
=======
echo NOME;

//No caso de classes, as constantes são acessadas por :: ao invés de uma ->$_COOKIE

class Pessoa{
    public const OLHOS = 2;


//no caso de metodos, se usa self no lugar de this;
function mostrarConstante(){
    echo self::OLHOS."\n";
}


}

$Rayssa = new Pessoa;

echo $Rayssa::OLHOS."\n";;

$Rayssa -> mostrarConstante();
>>>>>>> 8f8b087 (exemplo para acessar as constantes como parametros e metodos)
