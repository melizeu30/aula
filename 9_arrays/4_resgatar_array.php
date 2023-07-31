<?php

    $lista = [1,2,3,4,5,6,7,8,9,10];
    
    $regaste = array_slice($lista, 0,3); # começa do indice zero mais 3 elementos
    print_r($regaste);
    echo"<br>";

    $regaste = array_slice($lista, 0,6); # começa do indice zero mais 3 elementos
    print_r($regaste);
    echo"<br>";

    $regaste = array_slice($lista, 0,-3); # começa do indice seis menos 3 elementos
    print_r($regaste);
    echo"<br>";
    echo"<br>";
    echo"<br>";
    

    #Resgatar e remover elementos de array    
    $removidos = array_splice($lista, 5 );#primeiro indice inicial e a quantidade de elementos nesse casso remover os elementos de fato  resultado [6,7,8,9,10];
    print_r($removidos);
    echo"<br>";
    echo"<br>";
    

    $removidos2 = array_splice($lista, 1, -1);
    #primeiro indice de quantidade pode ser positivo ou negativo resultado [2,10];
    print_r($removidos2);







?>