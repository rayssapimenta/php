<?php
//strpos -> encontrar algum texto na string
// se recebemos algum valor, esse é o indice inicial
// se n for encontrado, o retorno vai ser false
$str = "Testando a função strpos";

$indicePalavra = strpos($str, 'strpos');

echo $indicePalavra . "\n";


echo substr($str, 20); // função que retorna a frase conforme  indice