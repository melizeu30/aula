<?php


    print_r($_GET);


    if($_GET['nome']  &&  $_GET['idade']){

    $nome = $_GET['nome']; // salva a requisão do GET
    $idade = $_GET['idade'];
    }else{

        $nome  = "faltou nome";
        $idade = "faltou idade";

    }


?>

<h1>Seu nome: <?= $nome ?> <?= $idade ?> anos</h1>
<p>Esta sendo impresso pois tenho os paramentos na URL seu foi alterada altera a impressao</p>