<?php

//sua estrutura é repetida até ser satisfeita e necessita de um contador pra atingir o objetivo
$x = 0;


while($x <= 26){
    echo ($x < 26) ? "$x ainda não atingi o objetivo <br/>" : "$x Objetivo atingido";
    $x += 1;
};