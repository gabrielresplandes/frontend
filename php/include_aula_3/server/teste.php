<?php
    echo "Olá mundo!!";

    $repetir = True;
    $vezes = 10;
    $contador = 1;

    while($repetir == true){
        echo "Em repetição";

        if($contador == $vezes){
            break;
        }

        $contador++;
    }

    ?>