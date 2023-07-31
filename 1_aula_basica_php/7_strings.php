<?php
    // String deve ser colocada em aspas simples ou duplas, se usar no codigo qualquer uma o correto e manter a o padrão adotado
    echo "Marcio <br> <br>";
    echo 'Marcio';
   

    $nome='BRASILIA';
    echo "<br> <br>";

    echo $nome;
    echo "<br> <br>";
    echo"$nome é seu nome";#imprimir valor aspas duplas

    if(is_string($nome)){
        echo "<br> <br>";
        echo"E UMA STRING";
    }



?>