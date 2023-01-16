<?php
/* 
    Sempre for iniciar funções, 
    passar valores como parametro faz com esse 
    valores sejam dinamicos, e sempre que forem chamados
    terão seus valores alterados.
    Pode ser mais de um valor
*/

//declarar a var, basta por dentro de ()
function valoresParametros($a,$b){

    echo "soma de $a + $b: ". $a+$b;
    
};

valoresParametros(22,36);