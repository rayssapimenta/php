<?php

$velocidade = 25;
function multar($velocidade){
if($velocidade < 40){
    echo "velocidade ideal";
}else if ($velocidade > 40){
    echo "Você será mutado";
}
};

multar($velocidade);