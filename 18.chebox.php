<?php


    if(isset($_POST['esportes'])){

        $esportes = $_POST['esportes'];
        print_r($esportes);

}
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>Qual ou quais esporte voce gosta</h3>
    <form action="chebox.php" method="POST">
        <input type="checkbox" name="esportes[]" value="Futebol">futebol
        </div>
        <div>
            <input type="checkbox" name="esportes[]" value="Volei">Volei
        </div>
        <div>
            <input type="checkbox" name="esportes[]" value="Natação">Natação
        </div>
        <div>
            <input type="checkbox" name="esportes[]" value="Basquete">Basquete
        </div>
        </div>

        <input type="submit" value="Enviar">

        <div>   
    </form>     

    
</body>
</html>