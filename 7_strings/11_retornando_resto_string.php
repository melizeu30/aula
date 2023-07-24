<?php

    $texto = "Vendo se o resto da string vai da ok";

    $rest = strstr($texto,"resto");

    echo "$rest <br>";
    $r= "vai";

    $rest2 = strstr($rest, $r);

    echo