<?php
//Podemos criar muitas variáveis com base em um array
//Para isso vamos utilizar a função list
$pessoa = ["Rayssa", 25, "Programadora"];

list($nome, $idade, $profissao) = $pessoa;

echo $nome;
