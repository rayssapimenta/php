<?php
$peso = 35;
 
function peso($a){
    echo $a > 80? 'Pesado demais' : 'Peso dentro do limite';
}

peso($peso);
echo "<br/>";
$peso = 99;
peso($peso);