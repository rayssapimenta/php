<?php
//parse_url -> podemos decompor uma url
// recebe um array com todas as partes que a URL tem
//alguns elemntos que podem ser retornados são : protocolos, host, parâmentros

$url = "https://www.udemy.com/course/php-do-zero-a-maestria-com-projetos-incriveis/learn/lecture/23220964#overview";

print_r(parse_url($url));




/*
        RETORNO 
 >
 
        Array
(
    [scheme] => https
    [host] => www.udemy.com
    [path] => /course/php-do-zero-a-maestria-com-projetos-incriveis/learn/lecture/23220964
    [fragment] => overview
)






*/