<?php
//os paramentros já são passados com valores
//Caso não receba valores, os valores default são assumidos

function teste($teste="Valor Default"){
    echo $teste;
};

teste("oi");
echo "\n </br>";
teste();