<?php

$nomeComepleto='matheus henrique';
$idade =24;
$status=true;
$salario=1500.00;

echo $nomeComepleto;
echo"<hr>";
//converte em maisculo
echo strtoupper ($nomeComepleto);
echo "<hr>";
echo strtolower($nomeComepleto);
echo"<hr>";
echo ucwords($nomeComepleto);
echo "<hr>";
echo str_replace("matheus","joão",$nomeComepleto);
echo "<hr>";
echo str_repeat(" edson ",5);
echo "<hr>";
echo isset($nome)?'true':'false';
echo "<hr>";
echo isset($nomeComepleto)?'true':'false';
echo "<hr>";
echo empty($nome)?'true':'false';
echo "<hr>";
echo empty($nomeComepleto)?'true':'false';
echo "<hr>";
