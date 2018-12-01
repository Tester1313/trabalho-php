<?php
$sexo = $_POST["gender"];
$altura = $_POST["altura"];


if ($sexo == 1) {
    $pesoIdealH = (72.7 * $altura) - 58;
    echo "Peso ideal para homem: $pesoIdealH";
} else {
    $pesoIdealM = (62.1 * $altura) - 44.7;
    echo "Peso ideal para mulher: $pesoIdealM";
}


?>