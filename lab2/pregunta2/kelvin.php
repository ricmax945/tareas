<?php

$temperatura = $_GET["temperatura"];
$temperaturac = $temperatura - 273.15;
$temperaturaf = (($temperatura-273.15)*(9/5))+32;

/*
echo "su temperatura en Kelvin: ".$temperatura."<br>";

echo "su temperatura en Celsius: ".$temperaturac."<br>";

echo "su temperatura en Fahrenheit: ".$temperaturaf;
*/
?>

<table style="border: 2px solid green; background-color: white; border-collapse: collapse;">
<tr><th style="border: 1px solid green; padding: 8px;">Kelvin</th><th style="border: 1px solid green; padding: 8px;">Celsius</th><th style="border: 1px solid green; padding: 8px;">Fahrenheit</th></tr>
<tr>
<td style="border: 1px solid green; padding: 8px;"><?php echo $temperatura ?></td>
<td style="border: 1px solid green; padding: 8px;"><?php echo round($temperaturac, 2)?></td>
<td style="border: 1px solid green; padding: 8px;"><?php echo round($temperaturaf, 2)?></td>
</tr>
</table>