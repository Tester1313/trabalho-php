<?php

$servidor="localhost";
$usuario="root";
$senha="";
$nomeBase="producao";
$porta="3306";

$banco = mysqli_connect($servidor, $usuario, $senha, $nomeBase, $porta) or die("Erro ao conectar: ".mysqli_connect_error());

shell_exec('php teste.php');
?>