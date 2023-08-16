<?php

    echo"testando tag normais <br><br>";
    $nome = "Andreia";
    $sobrenome = "Batista";


?>

<?
    # não vale apena ultilizar pois ter servidores que não liberados
    echo"testando short tags<br><br>";


?>

<?
    # não vale apena ultilizar pois ter servidores que não liberados
    echo"testando short tags<br><br>";
    

?>
<?= $oi = "imprimir <br><br><br>" #não deve ser usado para logica de php ?>


<form action="">

    <div>
        <input type="text" value="<?= $nome;?>">        
    </div>
       <input type="text" value="<?= $sobrenome;?>">
    <div>
        <input type="submit" value="Enviar">
    </div>




</form>