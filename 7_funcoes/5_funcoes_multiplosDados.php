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
    echo"<br>";
    echo"<br>";


    
    $dados1 = dados("Carlos", "Andradre", 50);   
    print_r($dados1);
    echo"<br>";
    echo "Oi $dados1[0] $dados1[1] voce tem $dados1[2]!!";


















?>