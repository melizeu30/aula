<?php

    function soma( $a , $b, $c, $d){

        print_r(func_get_args());
        echo"<br>";
        print_r(func_num_args());


        return $a+$b+$c+$d;

    }

    soma(15,10,20,30);




?>