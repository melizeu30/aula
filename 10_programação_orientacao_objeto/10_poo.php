<?php

    class ContaCorrente{
        public $nome;
        public $saldo;
        public $limite;
        public $creditoPessoal;

        function __construct($nome, $saldo, $limite, $creditoPessoal) {

            $this->nome = $nome;  // podemos dizer ultilizar parâmetro da função
            $this->saldo = $saldo;// os valores que vem de parâmetros vão preencher propriedade do objeto
            $this->limite = $limite;
            $this->creditoPessoal = $creditoPessoal;
           
        }
    }



    $a = new ContaCorrente("Andreia", 1000, 10000, 200000);
    echo"Sr.a $a->nome. <br> Seu saldo: $$a->saldo. <br> Limite: $a->limite. <br> Credito Pessoal:$a->creditoPessoal. <br> <br>";
    echo"<br>";
    echo"<br>";
    $b  = new ContaCorrente("Mucio", 10, 100, 500);
    echo"Sr.a $b->nome. <br> Seu saldo: $b->saldo. <br> Limite: $b->limite. <br> Credito Pessoal:$b->creditoPessoal. <br> <br>";  




?>