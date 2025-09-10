<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $numero = $_GET["numero"];
    $suma=0;

    $temp = $numero;
    while ($temp > 0) {
        $digito = $temp % 10;
        //echo $digito . "<br>";
        $suma += $digito;
        $temp = intval($temp / 10);
    }
    echo "La suma es: ".$suma;
    ?>
</body>
</html>

