<?php
$valor = $_POST["valor"];


if ($valor > 300.00) {
    $valorReajuste = $valor * 0.3;
    $valor = $valorReajuste + $valor;
    echo "Valor reajustado: $valor ";
} else {
    $valorReajuste = $valor * 0.5;
    $valor =+ $valorReajuste + $valor;
    echo "Valor reajustado: $valor ";
}


?>