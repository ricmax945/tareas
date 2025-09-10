<?php 

$n = $_GET["n"];

echo "Cantidad de numeros primos: ".$n;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcularprimos</title>
    <style>
        ol {
            border: 2px solid green;
            background-color: yellow;
            padding: 2%;
        }
    </style>
</head>
<body>
    <ol>
    <style>
        ol {
            border: 2px solid green;
            background-color: yellow;
            padding: 2%;
        }
    </style>
    <?php
    function esPrimo($num) {
        if ($num < 2) return false;
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) return false;
        }
        return true;
    }

    $contador = 0;
    $numero = 2;
    while ($contador < $n) {
        if (esPrimo($numero)) {
            echo "<li>$numero</li><br>";
            $contador++;
        }
        $numero++;
    }
    ?>

</ol>
</body>
</html>
