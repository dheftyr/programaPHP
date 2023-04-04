
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Depósito</title>
</head>
<body>

    <form method="post">
        <input type="text" name="valor">
        <input type="text" name="taxa">
        <input type="submit" name="calcular" value="calcular">
    </form>

    <?php
        if(isset($_POST['calcular'])){

            $valor = $_POST['valor'];
            $taxa = $_POST['taxa'];

        $valor;
        $taxa;
        $redimento = $valor * ($taxa/100);
        $total = $valor + $redimento;

        echo "Seu depósito foi: $valor"."</br>";
        echo "Seu redimento foi: $redimento"."</br>";
        echo "Seu valor total: $total"."</br>";

        }
    ?>    

    
</body>
</html>


