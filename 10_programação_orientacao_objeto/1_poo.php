<?php


    # Iniciamos class com  nome da classe inicia com letra maíscula
    class Animal{
        // aqui sera declarada as propriedades e métodos da classe

        public $patas = "4 patas";  // propriedades aqui pode ser vazia também
        public $rabo = "longo";
        public $cor = "preto";

        function latir(){ // método latir
            echo"auauauauau!!! <br>";
        }

        function miar(){// método miar
            echo"miaumiua <br>";
        }

        function andar($m){// método andar
            echo"Andou $m metros <br>";
        }

    }




  
# instânciar o objeto cachorro com a palavra new podemos acessar as propriedades e métodos
$pug = new Animal;
$xiquinha = new Animal;


$pug -> latir();
$pug -> andar(100);
echo $pug -> patas. "<br>";
echo $pug -> cor = "azul <br><br>";

$xiquinha  -> miar();
$xiquinha -> andar(30);
echo $xiquinha -> patas. "<br>";
echo $xiquinha -> cor;











class ProdutoEletronico{
    public $voltagem1 = "220v";
    public $voltagem2 = "110v";
    public $voltagem3 = "bivolt";
 


   function desconto($valor){// posso acessar na classe
        echo   $valor - ($valor*0.10);
        echo"<br>";
    }
  
}

$celular = new ProdutoEletronico;
$geladeira = new ProdutoEletronico;

echo"<br>";
echo"<br>";

echo $celular->desconto(9580). "Autorizado <BR>";
echo $celular->voltagem3;

echo"<br>";


















?>