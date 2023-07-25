<?php
    #podemos acessar sem precisar colocar o nome do array usando a seguinte estrutura array associativo


    $eduardo = [
        "nome" =>"Eduardo",
        "cpf" => 36125126161,
        "sexo" => "M",
        "idade" => 32,  
    ];

    
    $carla = [
        "nome" =>"Carla",
        "cpf" => 36125126161,
        "sexo" => "M",
        "idade" => 25,  
    ];

    foreach($eduardo as $carac => $value){
        echo "$carac => $value <br>";      

    }

    echo"<br>";
    echo"<br>";

    foreach($carla as $carac => $value){

        echo "$carac => $value <br>";
    }
    

    

?>


