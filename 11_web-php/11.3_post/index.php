<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="cadastro.php" method="Post" >
        <div>
             NOME
            <input type="text" name="nome" placeholder="nome"><bR>
            IDADE
            <input type="text" name="idade" placeholder="idade"><br>
            CPF
            <input type="CPF" name="CPF" placeholder="CPF">
        </div>
        <div>
            <input type="checkbox" name="perguntas[]" value="casado/solteiro">casado <br>
            <input type="checkbox" name="perguntas[]" value="casado/solteiro">solteiro<br>
            
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>    
</body>
</html>