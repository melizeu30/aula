<?php
    // temos 3 visibilidades 
    //public,  não há protecão pode ser acessada de qualquer forma
    //pretected  pode somente ser acessada pela classe de origem  pela herança
    //private pode ser manipulada somente pela classe que foi criada 







    class Produto {
        public $moveis = "Madeira Aglomerado";
        public $garantia = "1 ano";
        private $desc = "desconto liberado 80%";
        protected $cashbak ="Sem cashbak";

      //  public function descontoEspecial($desconto){
      //      $this->$desc= $desconto; 

      public function queima() {
            return  $this->desc; 
      }
      public function cash() {
        return  $this->cashbak; 
  }
          
    }


    

    class ProdutoEspecial{
        public function alterarMaterial($sofa) {
            $sofa->moveis = "Madeira em MDF";
            // atraves desse método pode alterar a classe produto
        }

        public function garantiaExtendida( $sofa){
            $sofa->garantia="2 anos";
        }

        public function descontoE($sofa,$desconto){
            $sofa->desconto="80%";
        }

    }





    $sofa = new Produto;
    echo $sofa->moveis. "<br>";
    echo $sofa->garantia. "<br><br>";
    // acessamos a propriedade da classe produto
    $sofaEspecial = new ProdutoEspecial;
    $sofaEspecial->alterarMaterial($sofa);
    $sofaEspecial->garantiaExtendida($sofa);    
    echo $sofa->moveis . "<br>";
    echo $sofa->garantia. "<br>";
    echo $sofa->queima() . "<br>";  // consigo acessar a propriedade pelo objeto somente pela classe
    echo $sofa->cash("com cash") . "<br>"

    




   // $d = new Produto;
   // $d->descontoEspecial($sofa); não conseguimos acessar por ser private
   // echo $d->sofa. "<br>";

   //echo $sofa->desc. ('80$'); não conseguimos alterar também

   // podemos alterar por meio do objeto outro objeto as propriedades que estão public

?>




    
  
    
    
    
  
    




