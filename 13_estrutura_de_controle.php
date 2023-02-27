<?php

    $a = 10;
    $b = 9;
    

    if(($a  < $b) && ( $a != $b)){#verdadeiras
        echo "A é menor B e diferente de b e não identicos";
        echo "<br>";
    }else if($a == $b ){# qual ele for verdadeiro e sai da condição
        echo "A é diferente de B";  
        echo "<br>" ;     
    }else if($a === $b){
        echo  "A e identico a B";
        echo "<br>";
    }else if( $a > $b){
        echo " A e maior que b";
        echo "<br>";        
    }else{
        echo "Não tem resposta para os dados apresentados";
    }    

?>