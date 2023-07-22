<?php
    include "backend.php";

?>

<h1>Seja bem bem vindo sentimos a sua falta separamos novidades</h1>
<p><?= $nome; ?> veja o que separamos para você!! Aproveite oportunidade voce é muito especial</p>


<ul>
<?php foreach($produtos as $produto): ?>

<li><?= $produto; ?></li> 
<?php endforeach; ?>
</ul>





