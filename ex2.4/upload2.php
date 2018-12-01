<?php
$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];
$d = $_POST["d"];


$soma = $a + $c;
$mult = $b * $d;

if ($soma > $mult) {
    echo " A+C é maior que B*C";
} else if ($soma == $mult) {
    echo " A+C é igual que B*C";
} else {
    echo " A+C é menor a B*C";
}


?>