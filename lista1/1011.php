<?php
$r=intval(readline());
$pi = 3.14159;

$x=(4/3) * $pi * ($r**3);
$x=number_format($x, 3, ".", "");

echo "VOLUME = $x\n";
?>
