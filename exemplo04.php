<HTML>

<HEAD>
<TITLE>Exemplo 02</TITLE>
</HEAD>

<BODY>

<h2>Exemplo 04</h2>

<?php

$n1 = $_POST["numero1"];
$n2 = $_POST["numero2"];

$ma = ($n1 + $n2) / 2;
$md = ($n1 - $n2) / 2;

echo "A média aritmética é $ma.<br />";
echo "A metade da diferença é $md.";

?>

</BODY>
</HTML>
