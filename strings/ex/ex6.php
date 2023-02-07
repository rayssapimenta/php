<?php
//converta o array para string

$arr = [
    'O',
    'PHP',
    'é',
    'muito',
    'legal'
];

$str = implode(' ', $arr);

echo $str;