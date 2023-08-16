<?php
     
     print_r($_SERVER);

     ECHO"<BR><BR><BR>";         
     ECHO $_SERVER['MYSQL_HOME'];

     ECHO"<BR><BR><BR>";
     
     ECHO $_SERVER['SERVER_PORT'];
     ECHO"<BR><BR><BR>";


     if( $_SERVER['SERVER_NAME'] == 'localhost'){
        echo"Esta acessando  o localhost";
     }


    // Permite direcionar a pagina na aplicação desviar a rota para o usúario



?>