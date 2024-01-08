<?php

    # x

    $yearsOld = rand(0, 99);

    echo "idade: $yearsOld <br>";

    /*
    if($yearsOld < 13){
        echo "voce é uma criança";
    }else{

        if($yearsOld<19){
            echo "você é um adolescente";
        }else{

            if($yearsOld <60){
                echo "você é um adulto";
            }else{
    
                if($yearsOld<100){
                    echo "voce é um idoso";
                }else{
    
                    echo "voce é um matusalém";
    
                }
    
            }

        }

    }
    */

    if($yearsOld < 13){
        echo "voce é uma criança";
    }else if($yearsOld<19){
        echo "você é um adolescente";
    }elseif($yearsOld <60){
        echo "você é um adulto";
    }else if($yearsOld<100){
        echo "voce é um idoso";
    }else{
        echo "voce é um matusalém";
    }

    

?>