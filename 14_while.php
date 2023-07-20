<?php

    $b = 1;
  
          #condição de parada  a condição for verdadeira
    while($b < 100000){
        
        echo $b."<br>";

        if($b === 30){
            echo" $b Codigo encontrado <br>";
            echo"Saida do loop";
            break;

        
        
        }

        $b = $b + 1;
        #  $b++   pode ser usado essa estrutura que e mais simples
        #contador, incremento  

    }
    echo"<br>";
    echo"<br>";
    echo"<br>";

        $c = 10;
           #condição de parada  a condição for verdadeira
           while($c >= 0){
        
            echo $c."<br>";


    
            $c = $c - 1;
            #  $b++   pode ser usado essa estrutura que e mais simples
            #contador,decremento 
    
        }
        echo"<br>";    
        echo"<br>";
       


    
       
        $cod = 10;  
        #execução continue
     while($cod > 0){

        if($cod == 2 || $cod == 5) {
            echo" $cod Não teve aumento";
            echo"<br>";
            $cod--;            
            continue; 
            # continue apenas pula a instrução
        }

        
           echo" $cod teve aumento"; 
           echo"<br>";
           $cod--;


        }
        



   
         

      
      

         






?>