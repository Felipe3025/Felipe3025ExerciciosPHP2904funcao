<?php
function maiorNumero($a, $b, $c) {
    return max($a, $b, $c);
}

$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];
$resultado = maiorNumero($a, $b, $c);

echo "<h2>Maior número: $resultado</h2>";
?>
