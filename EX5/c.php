<?php
function validarIdade($idade) {
    if ($idade < 18) {
        return "Menor de idade";
    } elseif ($idade >= 60) {
        return "Idoso";
    } else {
        return "Adulto";
    }
}

$idade = $_POST["idade"];
$resultado = validarIdade($idade);

echo "<h2>Classificação: $resultado</h2>";
?>

