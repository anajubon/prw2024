<?php
$nome=readline();
$sal=floatval(readline());
$totalv=floatval(readline());

$totalv = (($totalv/100) * 15);
$salcb = $sal+$totalv;
$salcb = number_format($salcb, 2, ".", "");

echo "TOTAL = R$ $salcb\n";
?>