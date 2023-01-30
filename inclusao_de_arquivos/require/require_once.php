<?php
//a única diferença é que o mesmo só será incluido na pagina 1x, impedindo assim a redundancia

require_once "teste_require.php";
require_once "teste_require.php";
echo "<p> Estou incluindo via require</p>";
