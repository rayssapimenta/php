<?php
$idade = (int) readline('Insira sua idade');

if ($idade < 16)  
 echo ' menor de idade, não vota';
else
    if ($idade >=16 && $idade < 18 )
    echo 'Voto opcional';
else
    echo 'voto obrigatório';

?>