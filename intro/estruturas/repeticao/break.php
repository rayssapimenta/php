<?php
// Para sair do loop antes do fim do while
//normalmente usada em if

$a = 0;

while($a < 8){
    echo "o valor  é $a \n";

    if ($a === 5) {
        echo "atingi meu objetivo, meu valor é 5 = $a";
        break;
    }

    $a++;
}