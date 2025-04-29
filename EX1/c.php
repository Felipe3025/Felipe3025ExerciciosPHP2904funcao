<?php
function calcularMultiplicacao($a, $b) {
    return ($a * $b);
}

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$multiplicacao = calcularMultiplicacao($valor1, $valor2);

echo "A multiplicação entre $valor1 e $valor2 é:" $multiplicacao;
?>