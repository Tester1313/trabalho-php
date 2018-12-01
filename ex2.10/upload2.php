<?php
    $valor = $_POST["valor"];
    $fat = 1;

    for ($num=2; $num <= $valor; $num++) {
        $fat *= $num;
    }

    echo $fat;


?>