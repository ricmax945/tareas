<?php

$temperatura = $_GET["temperatura"];
$temperaturak = $temperatura + 273.15;
$temperaturaf = ($temperatura*(9/5)+32);

/*

echo "su temperatura en Celsius: ".$temperatura."<br>";

echo "su temperatura en Fahrenheit: ".$temperaturaf."<br>";

echo "su temperatura en Kelvin: ".$temperaturak;

*/

?>

<table style="border: 2px solid green; background-color: white; border-collapse: collapse;">
<tr><th style="border: 1px solid green; padding: 8px;">Celsius</th><th style="border: 1px solid green; padding: 8px;">Fahrenheit</th><th style="border: 1px solid green; padding: 8px;">Kelvin</th></tr>
<tr>
<td style="border: 1px solid green; padding: 8px;"><?php echo $temperatura ?></td>
<td style="border: 1px solid green; padding: 8px;"><?php echo round($temperaturaf, 2)?></td>
<td style="border: 1px solid green; padding: 8px;"><?php echo round($temperaturak, 2)?></td>
</tr>
</table>