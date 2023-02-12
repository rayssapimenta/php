<?php
//crie uma array associativo com nomes e idades;
//imprima estes dados em uma tabela de HTML
//Dica : utiliza as tags do elemento table

$pessoa = [
    'Rayssa' => 24,
    'João' => 21
];
?>


<table>
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>

    <?php foreach($pessoa as $nome => $idade):?>
    <tr>
        <td><?= $nome ?></td>
        <td><?= $idade ?></td>
    </tr>
    <?php endforeach;?>
</table>