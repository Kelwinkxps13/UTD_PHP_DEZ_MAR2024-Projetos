<?php

    #LUIZINHO QUER SABER SE ELE PODE PILOTAR UMA MOTO OU NAO legalmente
    #idade deve ser maior ou igual a 18 anos. se ele nao tiver idade o suficiente, entao ele deve aguardar x anos

    $yearsOld = rand(10 , 99);
    
    echo "Idade: $yearsOld <br>";
    
    if ($yearsOld>=18) {

        echo "Luizinho pode pilotar a moto";
    
    }else{

        
        $x = 18 - $yearsOld;

        if($x==1){
            echo "luizinho deve esperar $x ano.";
        }else{
            echo "luizinho deve esperar $x anos.";
        }
        

    }

?>