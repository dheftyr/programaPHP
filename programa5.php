<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucessor e Antecessor</title>
</head>
<body>

    <form method="post">

        <input type="text" name="num">
        <input type="submit" name="enviar">

    </form>

    <?php

        if(isset($_POST['enviar'])){

            $suc = $_POST['num'];
            $num = $_POST['num'];
            $ant = $_POST['num'];

            $suc++;
            $ant--;

            echo "O número que você digitou foi:$num";
            echo "</br>";
            echo "Seu sucessor é:$suc";
            echo "</br>";
            echo "Seu antecessor é: $ant";




        }

    ?>
    
</body>
</html>