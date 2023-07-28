<?php

    // Na herança permite que uma classe herde de outra métodos e propriedades de outra classe palavra reservada extends

    class Automovel{
        public $motor ="combustão <br>"; // propriedade


        public function carro(){// método
            echo"Pecorre estradas <br>";
        }

        private function ruim(){
            echo"Carro muito ruim";
        }

        public function AcessarRuim(){ // com public dentro da class conseguimos acessar os métodos private e proteced
            $this->ruim();
        }
        protected function bom(){
            echo"O carro e muito bom!";
        }

        public function Acessarbom(){
            $this->bom();
        }


    }

    // a palavra reservad extends permite que ferro velho herde de automovel suas propriedades e métodos
    class FerroVelho extends Automovel{
        // sem colocar nenhuma propriedade ou método com extends consigo acessar da class Automovel


        
        public function AcessarbomNoExtends(){// com extends 
            $this->bom();
        }
        // Consigo acessar a outra classe usando o conceito de herança



    }



    $fiat = new Automovel;   
    echo $fiat->motor;
    echo $fiat->carro();
    echo $fiat->Acessarbom();
    
    echo"<br>";
    echo"<br>";

    $Lumina = new FerroVelho;
    echo $Lumina->motor;
    echo $Lumina->carro();
    echo $Lumina->AcessarRuim(). " - ";
    echo $Lumina->AcessarbomNoExtends();
    echo"<br>";
    










?>