<?php

    class ProdutoEletronico{
        public $volt;  // podemos chamar propriedades com o this
        public $cor; 

        function voltagem($volt){
            $this->volt  = $volt;   // voltagem desse objeto e o nome que vem do parametro da função
        }

        function cor($cor){
            $this->cor = $cor; // podemos chamar as propriedades com this e modificar valores 
        }

        function transporteNormal(){
            return "10 dias para chegar em sua residencia <br>";           

        }

        function transporteNormal1(){
            return strtoupper($this->transporteNormal()); // podemos chamar os metedos com o this
           
        }

    }

    $geladeira = new ProdutoEletronico;  // palavra new e usada para instancia um objeto da classe produto
    $celular   = new ProdutoEletronico;



  
    $celular->voltagem("220");
    $celular->cor('Branco');
   
    echo "Sua escolha foi $celular->volt  <br>";    
    echo "Voce escolheu cor:  $celular->cor <br>";   
    echo $celular->transporteNormal1();


 


    














    





?>