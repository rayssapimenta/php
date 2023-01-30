<?php
//usado para inserir arquivos em outros
//diferente do include, caso o arquivo n exista, ele gera um erro fatal
require "teste_require.php";

echo "<p> Estou incluindo via require</p>";


/*caso eu queira incluir arquivos de outros diretorios,
o ideal é usar o __DIR__ para n causar erro...*/

include __DIR__."/../../intro/ex/ex.php";