<?php
//com o else if podemos criar novos blocos de expressão
//n necessariamente tem que ter um else
//caso n tenha um else e as expressões td sejam falsa, n tera nada de retorno
if(1>5){
    echo 'entrou if ';
}else if (1<5){
    echo 'entrou else/if';
}else{
    echo 'entrou else';
}

echo "<br/>";

if(1<5){
    echo 'entrou if ';
}else if (1<5){
    echo 'entrou else/if';
}else{
    echo 'entrou else';
}

echo "<br/>";

if(1>5){
    echo 'entrou if ';
}else if (1<1){
    echo 'entrou else/if';
}else{
    echo 'entrou else';
}