<?php

    class Produto{
        public $volt;  // podemos chamar propriedades com o this
        public $cor;

        function voltagem($volt){
            $this->volt  = $volt;   // voltagem desse objeto e o nome que vem do parametro da função
        }

        function cor($cor){
            $this->cor = $cor;
        }

        function transporteNormal(){
            return "10 dias para chegar em sua residência <br>";           

        }

        function transporteNormal1(){
            return strtoupper($this->transporteNormal()); // podemos chamar os metedos com o this
        }

    }

    $geladeira = new Produto;

    $geladeira->voltagem(220);
    $geladeira->cor("Branca");
   
    echo "Sua escolha foi $geladeira->volt  <br>";    
    echo "Voce escolheu cor:  $geladeira->cor <br>";
    echo $geladeira->transporteNormal();
    echo $geladeira->transporteNormal1();
    





?>