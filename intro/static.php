<?php

//Uma var de escopo local tem seus valores resetados sempre que usadas
//usando static os valores são mantidos

function testando(){
    $x = 0;
    $x++;

    echo "Testando sem static: $x <br/>";

};

function testandoStatic(){
    static $x = 0;
    $x++;

    echo "teste com static: $x <br/>";
};


testando();
testando();


testandoStatic();
testandoStatic();