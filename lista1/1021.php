<?php

function imprQtd($val, $tip, $valU) {
    $qtd = intval($val / $valU);
    printf("%d %s(s) de R$ %.2f\n", $qtd, $tip, $valU / 100);
    return $val % $valU;
}

$val = (float)readline();

$cent = (int)($val * 100);

$n = [10000, 5000, 2000, 1000, 500, 200];
$m = [100, 50, 25, 10, 5, 1];

echo "NOTAS:\n";
foreach ($n as $nota) {
    $cent = imprQtd($cent, "nota", $nota);
}

echo "MOEDAS:\n";
foreach ($m as $moeda) {
    $cent = imprQtd($cent, "moeda", $moeda);
}