<?php

    // função realiaza ações que são defindas pelo programador e principal caracteris pode ser reutilizado
    // O php já funções prontas e que podemos ultilizar print_r buildin criadas pelo php
    // pode ser chamama diversas vezes
    // melhora a manuntenção reduz duplicidade de codigo
    // invocar uma função 

    function somar(){// sem paramentros

        $salario = 1000;
        $ajudadedecusto = 1500;

         echo $salario + $ajudadedecusto . "<br>";

    }    
    somar();
    somar();

    //funções do php
    echo strtoupper("vai converter em caixa alta");

?>

