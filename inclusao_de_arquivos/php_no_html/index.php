<?php
    include_once "back.php";
?>
<h1>Seja bem-vindo/a ao nosso site.</h1>
<p><?=$nome;?>, veja as nossas ofertas</p>

<h2>Confira nossos principais produtos:</h2>

<?php foreach($produtos as $produto): //qd coloca o : devemos ter o endforeach?>
<ul><?=$produto;?></ul>
<?php endforeach;?>