<?php

    # método ou função substring
    $texto ="Quero que tudo seja feito em paz";

    $que= substr($texto,6,3);# primeiro o indice e depois quantidade de caracteres

    echo $texto;
    echo"<br>";
    echo $que;
    echo"<br>";

    $que1 = substr($texto, 6);# quando omito o último parâmentro ele pega ate o fim
    echo $que1;
    echo"<br>";

    $que2 = substr($texto, 6, -15);# quando omito o último parâmentro ele pega ate o fim
    echo $que2;



?>