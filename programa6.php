<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elevação de Número</title>
</head>
<body>
    <?php
    if(isset($_POST['calcular'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

        $total = pow ($num1, $num2);
    }
    ?>

    
    <form  method="post">
        <input type="text" name="num1"/>
        <input type="text" name="num2"/>
        <input type="submit" name="calcular" value="Calcular">
    </form>
    

    <?php
    echo "$num1 elevado a $num2".'</br>';
    echo "Total: $total";

    ?>

    

    
</body>
</html>