<?php
//são como var q serao usadas p moldar as funcoes

function teste($nome, $sobrenome){
    echo $nome . $sobrenome;
};
// se a funcao foi declarada com parametros e vc invoca sem atribuir, dá erro
//teste();
teste('jose'," europeu");

//esses parametros podem ser valores soltos, ou var
$a= "Maria ";
$b= "Irineia";
teste($a,$b);