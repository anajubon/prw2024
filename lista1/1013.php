<?php
list($a, $b, $c) = explode(" ", readline());
    
$maiorab = ($a + $b + abs($a - $b))/2;
$maiorabc = ($maiorab + $c + abs($maiorab - $c))/2;

echo "$maiorabc eh o maior\n";
?>