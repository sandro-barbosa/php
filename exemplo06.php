<HTML>

<HEAD>
<TITLE>Exemplo 06</TITLE>
</HEAD>

<BODY>

<h2>Exemplo 06</h2>

<?php

$sb = $_POST["salario"];

$desc = $sb * 0.08;
$sl = $sb - $desc;

echo "O desconto é R$ $desc.<br />";
echo "O salário líquido é R$ $sl.";

?>

</BODY>
</HTML>
