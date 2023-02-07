<?php
//implode() - > converte array para string
// primeiro o separador, dps a string

$arr = [
    'nome',
    'sobrenome',
    'idade'
];

echo implode(", ", $arr);