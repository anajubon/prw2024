<?php
$fun = intval(readline());
$hr = floatval(readline());
$valorhr = floatval(readline());

    $sal = $hr * $valorhr;
    $sal = number_format($sal, 2, ".", "");
    
    echo "NUMBER = $fun\n";
    echo "SALARY = U$ $sal\n";
?>