<?php

//explode -> converte string em array
// 1o o separador e dps a string
$nome = 'Rayssa Nunes';
print_r(explode(" ", $nome)); // nesse caso, o espaço é o parametro que ele tem para separar os arrays


$objetos = "lápis, borracha, apontador";

print_r(explode(",",$objetos)); // qd ele se depara com uma "," ele separa o array