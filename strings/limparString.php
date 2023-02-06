<?php
//funções que tiram espaços
// trim -> limpa espaço antes e depois
// ltrim -> limpa a parte inicial
// rtim -> limpa o fim


$nome = "     Rayssa     ";

echo $nome."."; //sem tirar os espaços

echo "\n";

echo trim($nome).".";//tirando os espaços

echo "\n";

echo ltrim($nome).".";//tirando os espaços iniciais

echo "\n";

echo rtrim($nome).".";//tirando os espaços do final