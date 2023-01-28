<?php

$peso = 8;
$altura = 1.65;

$imc = $peso/$altura;

if($imc < 20){
    echo 'subpeso';
}else if($imc >= 20 && $imc <=25){
    echo 'normal';
}else{
    //$imc > 25
    echo 'sobrepeso';
};