<?php
//transforme 'este item está em promoção'
//em 'Este item está em PROMOÇÃO'
//OBS: pode separar as strings, mas não pode escrever em caixa alta ou baixa manualmente, só com função



$frase = "este item está em ";

$promo = "promoção";

echo ucfirst($frase).strtoupper($promo);