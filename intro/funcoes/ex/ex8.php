<?php
/*
    Crie uma função chamada defineCorCarro
    Onde há um parametro chamado cor, com valor default de vermelha
    retorne a cor do carro
    imprima o retorno tanto como defaul, como definindo a cor

*/

function defineCorCarro($cor='Vermelha'){

    return $cor."\n";

};
echo defineCorCarro();
echo defineCorCarro("Amarela");
