<?php

//similar ao if aninhado
//contador é por loop para n misturar os valores
//a quantia de vezes de execuçao do interno é a referente ao externo
$multiplicando = 1;


while($multiplicando <= 10){
    $multiplicador = 1;
    while($multiplicador <= 10){
        $multiplicacao = $multiplicando*$multiplicador;
        echo $multiplicando.' X '.$multiplicador. " = $multiplicacao \n";
        $multiplicador ++;
    }
    $multiplicando++;
}