<?php
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];

$qtd = 0;

for ($count = 0; $count < strlen($n1); $count++) {
   $aux = substr($n1, strlen($n1)) ;
    echo "$aux";
    if ($aux == $n2) {
        $qtd++;
    }
}

echo $qtd++;

?>