<?php

    # função parse_ulr  e retornado host, protocolo, e paramêtros

    $url = "https://www.uol.com.br";

    $ulrdecompor = parse_url($url);

    print_r($ulrdecompor);
    echo"<br>";
    echo"<br>";
    echo $ulrdecompor["host"];

    $url2 = "https://www.uol.com.br/esporte/colunas/danilo-lavieri/2023/07/24/brasil-estreia-com-show-e-manda-recado-as-favoritas-da-copa-do-mundo.htm/?=.php";
    echo"<br>";
    echo"<br>";
    $ulrdecompor2 = parse_url($url2);
    print_r($ulrdecompor2);





?>