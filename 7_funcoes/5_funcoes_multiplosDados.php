<?php

function dados($nome, $sobrenome, $idade){

    $nome ="Sr.$nome";
    $sobrenome ="$sobrenome";
    $idade = "$idade anos";

    return[$nome, $sobrenome, $idade];
 }

    $dados = dados("Matias","Mata", 31);

    print_r($dados);
    echo"<br>";
    echo "Oi $dados[0] $dados[1] voce tem $dados[2]!!";





?>