   
<?php
    #usar echo para validade o post
    $validacoes = []; # iniciar as validações 
    if(count($_POST) > 0){      

        if($_POST['nome'] === "") { 
            $validacoes[] = "Por gentiliza digite seu nome";
        }
        if($_POST['email'] === "") { 
            $validacoes[] = "Digite seu email";
        }
        if($_POST['senha'] != $_POST['confirmasenha']) { 
            $validacoes[] = "Senha não confere";
        }


        
    
   
   
    }
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>

</head>

<body>

    <?php  if(count($validacoes)):  ?>
        <ul>
            <?php  foreach($validacoes as $validacao): ?>
            <li><?= $validacao ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>   
    <form action="validacao.php" method="POST">
         <div>            
            <input type="text" name="nome" placeholder="Digite seu nome" >         
         </div> 
         <div>            
            <input type="email" name="email" placeholder="Digite seu email">         
         </div> 
         <div>            
            <input type="password" name="senha" placeholder="Digite sua senha">         
         </div> 
         <div>            
            <input type="password" name="confirmasenha" placeholder="confirme a sua senha">         
         </div>    
            <input type="submit" value="Enviar">         
         </div>       
    </form> 
  
</body>
</html>