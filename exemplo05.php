<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exempplo 03</title>
</head>

<BODY>

<h2>Exemplo 05</h2>

<?php

$n1 = $_POST["nota1"];
$n2 = $_POST["nota2"];
$n3 = $_POST["nota3"];

$md = ($n1 + $n2 + $n3) / 3;


// $md = substr($md, 0, 4);
// $md = round($md);

echo "A média final do aluno é ", number_format($md,1);

?>

</BODY>
</HTML>
