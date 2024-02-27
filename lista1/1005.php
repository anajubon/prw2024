<?php
$a=floatval(readline());
$b=floatval(readline());

$med=((3.5 * $a) + (7.5 * $b)) /11;
$med=number_format($med, 5, ".", "");

echo "MEDIA = $med\n";
?>