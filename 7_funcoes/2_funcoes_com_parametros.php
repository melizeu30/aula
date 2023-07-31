<?php

    function temperaturaAmbiente($temp){

        echo "A temperatura do ambiente é:$temp º Celsius <br>";
    }

    temperaturaAmbiente(23);
    temperaturaAmbiente(45);
    temperaturaAmbiente(50);

    $a= 30;
    $b= 40;

    temperaturaAmbiente($a);

    //php ignora paramentros desnecessario
    temperaturaAmbiente($a, 125);
    echo"<br>";
    
   


    // pode passar quantos parâmentros quiser
    function produto($marca, $nome){

        echo "O carro de $marca e $nome";




    }

    produto("Fiat","Argo <br>");
    produto("Toyota","Cross <br><br><br>");
    
    // essas funções não tem retorno



    // Posso retorna parametro defult
    function teste($a = "produto "){

        echo "O departamento do $a e ... <br>";

    }

    teste();
    teste("Eletronico");

    function texte($a , $b= "Categoria"){// boa pratica colocar default sempre a direita

        echo "O departamento do $a e ...da $b  <br>";

    }

    texte("promoção");
    











?>
