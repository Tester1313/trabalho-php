<?php
$a = $_POST["n1"];
$b = $_POST["n2"];
$c = $_POST["n3"];
$d = $_POST["n4"];

$media = ($a + $b + $c + $d) /4;

if ($media >= 70) {
    echo "Aluno aprovado com média: $media";
} else {
    echo "Aluno reprovado com média: $media";
}


?>