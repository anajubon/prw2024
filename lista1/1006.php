<?php
$a=floatval(readline());
$b=floatval(readline());
$c=floatval(readline());

$med=((0.2 * $a) + (0.3 * $b) + (0.5 * $c));
$med=number_format($med, 1, ".", "");

echo "MEDIA = $med\n";
?>
