<?php
//continue faz com que a execução continue pulando aquela
//costumamos usar dentro de uma estrutura de condicao

$teste = 10;
while($teste > 0){
    if ($teste == 5 || $teste == 7) {
        echo "pulou a execução $teste\n";
        $teste--;
        continue;
    }
    echo "teste = $teste\n";
    if($teste == 2){
        break; //encerra a execução total
    }

    $teste--;
}