<?php

//strrpos -> mostra a uma vez que o parametro aparece 

$str = "teste esse treco com o teste";

$inicio = strpos($str, "teste");
$fim = strrpos($str, "teste");

echo $fim;
echo "\n";
echo $inicio;
echo "\n";
echo substr($str, 23);
echo "\n";
echo substr($str, 0, 5);
