
<?php

    setcookie("nome", "Andre", time() + 2000); // salvamos pelo setcookie

    if(isset($_COOKIE['nome'])){

        $nome = $_COOKIE['nome'];
    }






?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LojaHp</title>
</head>
<body>
        <h3>Sentimos sua faltal</h3>
        <?php if($nome != ""):  ?>
            <p>Seja bem vindo <?=  $nome?></p>

        <?php endif;  ?>
        
    
</body>
</html>