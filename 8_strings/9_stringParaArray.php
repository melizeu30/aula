<?php

    $frase = "O texto que esta em string sera transformado em array!";

    $TextoArray = explode(" ", $frase);

    print_r($TextoArray);
    echo"<br>";


    $frase= "Caneta, lápis, Avião";
    $txt = explode(",", $frase);
    echo"<br>";
    print_r($txt);


    for( $i=0 ; $i < count($txt); $i++){
        echo"<br>";
        echo"$txt[$i]";

    }
   

    echo"<br>";
    echo"<br>";
    # convertendo array para string
    $lista = ["Game","Geladeira","Maquina de lavar","Computador"];
    $textoString = implode("=", $lista);

    print_r($lista);
    echo"<br>";
    echo"<br>";
    echo $textoString;






?>