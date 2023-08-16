<?php
    // quando queremos verificar a ancestralidade faz um retorno boleano podemos verificar om 


    class Automovel{

    }








    
    class Animal{

    }
    

    class Cachorro extends Animal{

    }




    $baleia = new Animal;
    $Bmw = new Automovel;
    $max = new Cachorro;


    if($Bmw instanceof Automovel){
        echo"Bmw é um Automovel <br>";
    }else{
        echo"Bmw não é um Automovel <br>";
    }
    echo"<br>";


    if($baleia instanceof Animal){
        echo"Baleia é um Animal <br>";
    }else{
        echo"Baleia não é um Animal <br>";
    }

    echo"<br>";
    // nesse exemplo podemos ver que max herdou todas as propriedade de um animal
    if($max instanceof Cachorro){
        echo"Max e um cachorro <br>";
    }else{
        echo"Max não e um cachorro <br>";
    }

    if($max instanceof Animal){
        echo"Max é um Animal <br>";
    }else{
        echo"Max não é um Animal <br>";
    }
    echo"<br>";
    echo"<br>";
    if($max instanceof Automovel){
        echo"Max e um automovel <br>";
    }else{
        echo"Max não e um automovel <br>";
    }

    














?>