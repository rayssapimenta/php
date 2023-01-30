<?php
//a única diferença é que o mesmo só será incluido na pagina 1x, impedindo assim a redundancia

include_once "teste_require.php";
include_once __DIR__."/../require/teste_require.php";
echo "<p> Estou incluindo via require</p>";
