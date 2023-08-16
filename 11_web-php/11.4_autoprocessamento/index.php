<?php
        //echo $_SERVER['REQUEST_METHOD'];     
       // echo"<br><br><br><br>";

       $method = $_SERVER['REQUEST_METHOD'];
       
       if( isset($_POST['nome'])) {
        $nome = $_POST['nome'];       
        

       }       
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>

    <?php
        if( $method == 'GET'):  //  ESTRUTURA 
    ?>

    <form action="index.php" method="POST" >
        <div>
                NOME
            <input type="text" name="nome" placeholder="nome"><br>         
        </div>       
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>  


    <?php
        else:
    ?>

        <h1>Seu nome é: <?= $nome ?></h1>

    <?php
        endif; // tem que ser com ponto e virgula para saber que instrução termina
    ?>   


</body>
</html>
