<?php
    class ContaCorrente{

        public $nome = "Marta Lins da Silva";
        public $cpf = 36156355114;  
        
      

    }

    class Funcionario{
        public function modificarNome($obj){
            $obj->nome = "luiz Eduardo <br>";
        }
    }





    $cliente = new ContaCorrente();
    echo $cliente->nome. "---". $cliente->cpf. "<br>";
    echo"<br>";
    echo"<br>";

    $func = new Funcionario();
    $func->modificarNome($cliente);
    echo $func->nome;



 





?>