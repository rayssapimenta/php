<?php
//exclua pera e feijão do array
$arr = ["batata", "maçã", "pera", "feijão", "arroz"];

array_splice($arr, 2, 2);

print_r($arr);

?>