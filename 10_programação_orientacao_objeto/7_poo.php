<?php
//  interface são modelos de classe quando vamos implementa em que a herança vai ser estendida tudo que for implementando na interfece , objetivo de criar um padrão

    interface Identidade{
        const nome = "Ana";
        public function rg();  // método dever ser declados tambem nesse caso na Class Cidadão

    }
      
    Class Cidadao implements Identidade{
        public $idade = 21;  // propriedade

        public function rg(){
            echo 29885311;
        }

        public function falarNome(){
            echo "Nome dela e:".  self::nome; // com self posso acessar a constante
        }
      
     

    }

 

    $ana = new Cidadao;
    $ana->rg();
    echo"<br>";
    $ana->falarNome();
    echo"<br>";
  
    
   
 






?>