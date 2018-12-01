<?php
$valor = $_POST["valor"];

if ($valor > 0){
    echo "Valor Positivo";
} else if  ($valor < 0) {
    echo "Valor Negativo";
} else {
    echo "Igual a Zero";
}

?>