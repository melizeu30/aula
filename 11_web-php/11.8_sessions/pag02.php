<?php
 

    session_start();


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Bom ve-lô    <?= print_r($_SESSION['cliente']) ?>    </p>
    
</body>
</html>
