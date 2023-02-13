<?php

//     existem algumas funções que podem nos ajudar
//      func_get_arg -> retorna a lista com os argumentos
//      func_num_args -> retorna o numero de argumentos 


function humano($nome, $idade){
    print_r(func_get_args());
    echo (func_num_args());
    return $nome . $idade;
};
humano("jose", 25);