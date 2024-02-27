<?php
list($a, $b, $c) = explode(" ", readline());
list($d, $e, $f) = explode(" ", readline());

    $x = ($b*$c) + ($e*$f);
    $x = number_format($x, 2, ".", "");

    echo "VALOR A PAGAR: R$ $x\n";
?>
