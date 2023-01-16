<?php
//basta um if ficar dentro do outro
//evitar usar

if(5>2){
    echo 'entrei no 1o if';
    if(1<5){
        echo 'entrei no segundo if';
    }else{
        echo 'entrei no segundo else';
    }
}else{
    echo "entrei no 1 else";
}
echo "<br/><br/>";

if(5>2){
    echo 'entrei no 1o if';
    if(1>5){
        echo 'entrei no segundo if';
    }else{
        echo 'entrei no segundo else';
    }
}else{
    echo "entrei no 1 else";
}

echo "<br/><br/>";

if(5<2){
    echo 'entrei no 1o if';
    if(1>5){
        echo 'entrei no segundo if';
    }else{
        echo 'entrei no segundo else';
    }
}else{
    echo "entrei no 1 else";
}