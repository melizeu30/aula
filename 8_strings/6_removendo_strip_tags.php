<?php


    # eliminar as tag e transformar em texto puro
    $textoHTML = "<p>
                        Ola mundo
                 </p>
                <div>
                        Sessão
                </div>
                <p>
                        Assunto
                </p>";



    echo $textoHTML;
    echo"<br>";

    $salvaTextoPuro = strip_tags($textoHTML);

    echo $salvaTextoPuro;


?>