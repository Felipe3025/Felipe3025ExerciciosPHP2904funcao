<?php
function converterParaCelsius($fahrenheit) {
    return ($fahrenheit - 32) * 5 / 9;
}

$fahrenheit = $_POST["fahrenheit"];
$celsius = converterParaCelsius($fahrenheit);

echo "<h2>Temperatura em Celsius: " . round($celsius, 2) . "°C</h2>";
?>
