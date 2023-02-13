<?php

//função - substr($str, inicio, fim);
// str - é a string que vamos procurar
// inicio - é o indice inicial da palavra ou texto
// fim - é o indice final da palavra ou texto

$nome = "Rayssa Nunes";

echo substr($nome, 7, 5); // os numeros são os indices da letrasss


echo "\n";
echo substr($nome, 5); //se omitir o indice final, ele vai até o fim