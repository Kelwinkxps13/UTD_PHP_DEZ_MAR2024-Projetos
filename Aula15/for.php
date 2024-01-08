<?php

    # mostrar os numeros de 0 a 10 na tela

    for($i=0; $i<11; $i++){
        
        echo "numero $i <br>";

    }

    echo "<br>";

    # mostrar os numeros pares de 0 a 10 na tela

    for($i=0; $i<101; $i++):

        if($i % 2 == 0):
            echo " numero $i é par !! -";
        endif;
        
        

    endfor;

?>