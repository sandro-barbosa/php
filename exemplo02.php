<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exempplo 02</title>
</head>

<BODY>

<h2>Exemplo 02</h2>

<?php

$nome = $_POST["n"];
$sobrenome = $_POST["sn"];

$completo = $nome . " " . $sobrenome;

echo "Olá $completo, seja bem vindo(a).";

?>

</BODY>
</HTML>
