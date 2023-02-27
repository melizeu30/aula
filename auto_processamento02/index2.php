
<?php
#TUDO RESULTADO EM AUTO PROCESSAMETO DA PASTA
    $usuario =[
        'nome' => 'MATEUS',
        'idade' => '29',
        'profissao' => 'medica',
        'salario' => 2500
    ];

    if($usuario){
        $nome = $usuario['nome'];
        $idade = $usuario['idade'];
        $profissao = $usuario['profissao'];
        $salario = $usuario['salario'];

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

    
    <form action="">
         <div>            
            <input type="text" name="nome" placeholder="Digite seu nome" value="<?=$nome?>">         
         </div> 
         <div>            
            <input type="text" name="nome" placeholder="Digite seu idade" value="<?=$idade?>">         
         </div> 
         <div>            
            <input type="text" name="nome" placeholder="Digite seu profissao" value="<?=$profissao?>">         
         </div> 
         <div>            
            <input type="text" name="nome" placeholder="Digite seu salario" value="<?=$salario?>">         
         </div>    
            <input type="submit" value="Enviar">         
         </div>       
    </form>  
</body>
</html>
