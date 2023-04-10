<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando Trapézio</title>
</head>
<body>

    <?php

    if(isset($_POST['calcular'])){

        $base1 = $_POST['base1'];
        $base2 = $_POST['base2'];
        $altura = $_POST['altura'];

        $area = (($base1 + $base2) * $altura) /2;

    }

    ?>

    <form method="post"> 

    <label >Base 1
        <input type="text" name="base1"/>
    </label>

    <label >Base 2
    <input type="text" name="base2"/>

    </label>
    <label>Altura
        <input type="text" name="altura"/>
    </label>

    <input type="submit" name="calcular" value="Calcular"/>

    </form>

    <?php

        echo "A área do trapézio é: $area ";

    ?>
</body>
</html>