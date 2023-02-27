<?php


    class Pessoa{

        function latir(){
            echo " AUAUAUAUAU";
        }
    }

    $max = new Pessoa();

    $max ->cachorro ="max";

    echo $max->cachorro;
    echo"<br>";
    
    $max->latir();





?>