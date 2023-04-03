<?php

/*Laço de repetição estrutura for*/

    for($i = 1; $i <=10; $i++){
        echo "Repetindo:".$i;
        echo '</br>';
        if($i == 5){
            for($j = 5; $j > 0; $j--){
                echo "Retrocedendo:".$j;
                echo '</br>';
            }
        }
    }

    echo '</br>';
    echo '</br>';

    /*Laço de repetição estrutura while*/

    $k = 1;

    while($k <= 10){
        echo "Repetindo:".$k;
        echo '</br>';
        $k++;
            if($k == 6){
                $h = 5;
                while($h > 0){
                    echo "Retrocedendo:".$h;
                    echo '</br>';
                    $h--;
                }
            }
    }

?>