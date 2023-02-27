<?php

    # alguns navegadores não aceitam salvar devido a lei de 
    setcookie("nome","Marcio", time() + 3600); #salva com setcookie

    if(isset($_COOKIE['nome'])){

        $nome = $_COOKIE['nome'];
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
        <h1>Sendo monitorado</h1>
        <?php if($nome != " "): ?>
        <p>Seja bem vindo  <?= $nome ?>  </p>
        <?php endif; ?>

</body>
</html>