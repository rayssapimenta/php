<?php
//criar array com dados mistos e crie um while pra imprimir os que são strings

$arr = [25,'oi',44,'ok',true,'eu'];

while (is_string($arr[0])){
    echo 'string';
}