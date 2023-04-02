<?php

    /* Criando a variável e mostrando o valor dela */

    $nome = "Dheftyr Marcon";
    echo $nome;
    echo '</br>'; 
    echo '</br>';


    /* Criando duas variáveis e mostrando o valor dela com a concatenação */

    $nome1 = "Dheftyr ";
    $sobre_nome = "Marcon";
    echo $nome1.$sobre_nome;
    echo '</br>'; 
    echo '</br>';

    /* Criando uma variáveis com array e mostrando o valor dela (primeira forma) */

    $nome2 = ["D", "h", "e", "f", "t", "y", "r", " ", "M", "a", "r", "c", "o", "n"];
        for($i = 0; $i < count($nome2); $i++){
            echo $nome2[$i];
        }
    echo '</br>'; 
    echo '</br>';


    /* Criando uma variáveis com array e mostrando o valor dela (segunda forma) */

    $nome3 = ["D", "-", "h", "-", "e", "-", "f", "-", "t", "-", "y", "-", "r", " ", "M", "-", "a", "-", "r", "-", "c", "-", "o", "-", "n"];
        for($i = 0; $i < count($nome3); $i++){
            echo $nome3[$i];
        }
    echo '</br>'; 
    echo '</br>';


    /* Criando uma variáveis com array e mostrando o valor dela ignorando os '-' (terceira forma) */

    $nome4 = ["D", "-", "h", "-", "e", "-", "f", "-", "t", "-", "y", "-", "r", " ", "M", "-", "a", "-", "r", "-", "c", "-", "o", "-", "n"];
        for($i = 0; $i < count($nome4); $i++){
           if($nome4[$i] == '-'){
            continue;
           } 
           echo $nome4[$i];
        }

    echo '</br>'; 
    echo '</br>';

    /* Criando uma variáveis com array e mostrando o valor dela (quarta forma) */

    $nome5 = ["João", "Carlos", "Fabricia", "Daniel"];
        for($i = 0; $i < count($nome5); $i++){
            echo $nome5[$i];
            echo '</br>';
        }
    echo '</br>'; 
    echo '</br>';


    /* Criando uma variáveis com array e mostrando o valor dela (quinta forma) */

    $nome6 = ["João", "Carlos", "Fabricia", "Daniel", "Laryssa", "Marta"];
    $resultado;
        for($i = 0; $i < count($nome6); $i++){
           $resultado[] = $nome6[$i];
            echo $resultado[$i];
            echo '</br>';
        }
    echo '</br>'; 
    echo '</br>';

?>