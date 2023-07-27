<?php

    class Animal{
        public const patas = 4; // não consegue ser modificada pois a const não permite alteração
        public const olhos = 2;
        public const rabo = 1;

        function acessarConstante(){ //metodo acessar constante
            echo self::olhos. "<br>";//não uso this a palavra reservada self.

        }




    }


    $max = new Animal;
    echo $max::patas." <br>";
    
    $max->acessarConstante();








?>