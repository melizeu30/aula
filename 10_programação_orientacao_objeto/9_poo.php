<?php

// classe abstradas não pode ser instânciadas sua principal caracteristica para acessar temos que criar metodo e classes abstratas palavaras  reservada abstract

abstract class Cor{// classes abstradas não pode ser instância

    public static function escrever(){
        echo"Posso escrever a cor que quiser <br><br>";

    }  


    abstract public function desenho();// não declaro corpo 

}

//$desenho = new Cor;  não consigo instância metodo abstrado
Cor::escrever();


class Nova extends Cor{
    public function desenho(){
        echo"Agora posso desenhar";
    }

}

$des = new Nova;
$des->desenho();





?>