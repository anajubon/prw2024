<?php

$val = intval(readline());
$cedulas = [100, 50, 20, 10, 5, 2, 1];
//sllaskwdjkashdjkhefh
echo $val . "\n";

foreach ($cedulas as $ced) {
    $qtd_n = intval($val / $ced);
    $val %= $ced;
    $ced = number_format($ced, 2, ',', ''); 

    echo $qtd_n . " nota(s) de R$ $ced\n";
}
?>