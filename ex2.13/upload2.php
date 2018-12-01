<?php
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];

$soma = 0;

$n1 += 1;
for ($count = 0; $count < $n1; $count++) {
    $soma += $n2;
}

echo "$soma";


?>