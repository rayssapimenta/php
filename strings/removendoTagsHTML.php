<?php
//podemos remover tags html de uma string
// função   =  strip_tags
// Geralmente para salvar dados no banco removendo as tags

$textoHTML = "<p>Testando paragrafo</p>";

echo $textoHTML;

echo "\n";

echo strip_tags($textoHTML);