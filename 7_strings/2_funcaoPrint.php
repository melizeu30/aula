<?php

    $idade = 10;
  

    print("HELLO WORD!! <BR>");


    printf(" Numero %s e <br>", $idade, 150);# usado em linguagem mais antigas o C;


    printf("Febre de %0.2f <br>", 35.5);


    # calcular tamanho da string strstring

    $nome = "ANDRE LIMA DE SOUZA MONTES DA SILVA BEZERRA";
    $nome1= "ANA PAULA";

    echo strlen($nome). "<br>";
    echo strlen($nome1). "<br>";

    $string1 = strlen($nome);
    $string2 = strlen($nome1);





    if($string1 > $string2){
        echo"O nome do Andre e maior que Ana";
    }else{
        echo"O nome da ana e maior que Andre";
    }






?>