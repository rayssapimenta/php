<?php

$arr = [1, 2 ,3 ,4 ,5];
$arr2 = range(6,9);


//função que uni os arrays
$arrUnindo = array_merge($arr, $arr2);

print_r($arrUnindo);