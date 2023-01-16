<?php
/*
switch é uma estrutura que pode substituir o if
possui o break -> n ser mais executado
possui o default -> q executa por padrão
*/
$exp = 25;
switch($exp){
    case 0:
        echo 'exp é : 0';
        //se n por break e esse caso for verdadeiro ele continua executando os cases
        break;
    case 2:
        echo 'exp é : 2'; 
        //se n por break e n for vdd ele vai pulando até acha um de vdd
    case 3:
        echo'';
    default:
        echo'sou executado caso nenhum me atenda';
}

