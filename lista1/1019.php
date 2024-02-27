<?php
$ts = intval(readline());
$h = intval($ts / 3600);
$ts %= 3600;
$m = intval($ts / 60);
$s = $ts % 60;

printf("%d:%d:%d\n", $h, $m, $s);
?>