<?php
  

  trait Carro{
    public $queima = "modelo ano 2022";
    public function objetodoCarro(){
        echo " Treit do carro com rodas <br>";
    }  
  }

  trait Moto{
    public function objetodaMoto(){
        echo " Esse trait e da moto <br>";
    }
  }


  class Central {
    use  Carro;
    use  Moto;
}


 
   $audi = new Central;
   $yamaha = new  Central;

   $audi->objetodoCarro();
   echo $audi->queima. "<br><br>";

   $yamaha->objetodaMoto();

   // podemos melhorar o codigo como forma de ficar criando heranças que pode  torna o codigo complexo



?>