<?php
//Usado para incluir arquivos em outros
//pode-se assim usar o que está declarado no arq incluido
//n gera erro fatal, caso n esteja incluído, apenas um warning
// include "arquivo.ext"

include "teste_include.php";

echo "usando a variável do arquivo incluido : $teste";