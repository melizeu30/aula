<?php

    $texto ="Ano de 2023 foi muito proveitoso ne";


    $soma=0;
    for( $i=0;  $i<strlen($texto); $i++ ) {

        echo "$texto[$i] <br>";
        # como um array
        $soma++;


    }
    echo $soma;




?>