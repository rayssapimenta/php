<?php
//Criar funcao que verifica se um numero é par ou impar e imprima a msg correspondente

function imparPar($x){
    if ($x%2 == 0){
        echo "par";
    }else{
        echo 'impar';
    };
};
imparPar(2);