<?php
// onde será feita a validação do usuario

    $dados = [];

    if(count($_POST) > 0){      

        if($_POST['email'] === ""){
            $dados[]="Gentiliza colocar email";
        }
        
        if($_POST['nome'] === ""){
            $dados[]="Gentiliza colocar nome";
        }
        if($_POST['senha'] === ""){
            $dados[]="Gentiliza colocar senha";
        }
        if($_POST['csenha'] === ""){
            $dados[]="confirmar senha";
        }       
        
        if($_POST['senha'] != $_POST['csenha']){
            $dados[]="Senhas não confere";
        }   
        
      
       
    }



?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php if(count($dados)): ?>

        <ul>                                    <!--vou colocar uma lista-->
            <?php  foreach($dados as $dado):  ?><!--Vou pecorrer a lista-->
                <li><?=  $dado  ?></li>
            <?php endforeach; ?>

        </ul> 

    <?php endif; ?>

    <form action="index.php" method ='POST'>
        <div>
            <input type="text" name="email" placeholder="Digite seu email"><br>
            <input type="text" name="nome" placeholder="Digite sua nome"><br>
        </div>
        <div>
            <input type="password" name="senha" placeholder="senha"><br>
            <input type="password" name="csenha" placeholder="confirmarsenha"><br>
        </div>
        <div>
            <input type="submit" name="enviar" value="Enviar">            
        </div>
    
    </form>    
</body>
</html>









