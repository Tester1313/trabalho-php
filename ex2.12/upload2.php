<?php
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];

$n1 += 1;
for ($n1; $n1 < $n2; $n1++) {
    echo "$n1 ";
}


?>