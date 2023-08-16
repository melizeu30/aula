<?php
    

    // simula um banco de dados  chamado dados muito usado para edição de cadastro dados que vem do backend
    // dados mockados
    $usuario =[
        'nome' =>'Ana Clara',
        'profissao' => 'Analista de Sistema',
        'formação' => 'Curso Superior completo',
        'idade' => 29,
        'nacionalidade' => 'Brasileira'
    ];

    if($usuario){
        $nome = $usuario['nome'];
        $profissao = $usuario['profissao'];
        $formacao = $usuario['formação'];
        $idade = $usuario['idade'];
        $nacionalidade = $usuario['nacionalidade'];
    }


    if(isset($_FILES)){
        print_r($_FILES);
    }




    ?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="index.php" method="POST" enctype="multipart/form-data"> <!--multpart/form-data como atributos 
    são os requisitos necessarios-->
        <div>
            <input type="text" name="nome" placeholder="Digite nome"    value="  <?= $nome ?>  "><br>
            <input type="text" name="nome" placeholder="Digite nome"    value="  <?= $profissao ?>"><br>
            <input type="text" name="nome" placeholder="Digite nome"    value="  <?= $formacao ?>"><br>
            <input type="text" name="nome" placeholder="Digite nome"    value="  <?= $idade ?>"><br>
            <input type="text" name="nome" placeholder="Digite nome"    value="  <?= $nacionalidade ?>"><br>
        </div> 
        <div>
            <input type="checkbox" name="sexo"> <br><br>  
        </div>
        <div>
            <input type="file" name="imagem">
        </div>
        <div>
            <input type="submit" value="Anexar">
        </div>


                
        </form>       
    </body>
    </html>





