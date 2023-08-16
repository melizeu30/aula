<?php
    // SSL vem Secure Sockets Layer
    // usando para persistir os dados nas paginas , o php não se preocupa com a segurança do site nos programadores que prisamos se preocupar para garantir a segurança entre site e o servidor usando encriptação dos dados
    // alguns servidores bloqueam dados enviados pelo URL HTPPS devemos enviar via HTTPS


    session_start(); // cada pagina tem que  o metodo session_start()

   // print_r($_SESSION);
   $_SESSION['cliente']="Carlos";


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bom dia</title>
</head>
<body>
    <h1>Vamos comprar</h1>
    
</body>
</html>