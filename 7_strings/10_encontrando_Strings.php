<?php


    $nomes = "Andreia estava indo para passear encontrou o cachorro Max que estava saindo";

    $encontrar = strpos($nomes, "estava");#ele vai encontrar o indice da primeira palavra 

    echo "indice: [$encontrar]";
    echo"<br>";
    echo"<br>";

    $encontrar1 = strpos($nomes, "Java");
    echo"<br>";

    if($encontrar1 === false){
        echo "Palavra nao encontrada no indice";
    }



    $nomes1 = "Andreia estava indo para passear encontrou o cachorro Max que estava saindo";
    $encontrar1 = strrpos($nomes1, "estava");#vai encontrar o ultimo indece da  ultima palavara
    echo"<br>";
    echo"<br>";
    echo"<br>";
    echo $encontrar;
    echo"<br>";
    echo"<br>";
    echo $encontrar1;





?>