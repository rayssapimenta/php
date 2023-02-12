<?php
//a função comapct nos permite criar array com base em variaveis

$nome = "Rayssa";
$idade = 24;
$situacao = 'solteira';


//passamos as var como string
$pessoa = compact("nome", "idade", "situacao");

print_r($pessoa);