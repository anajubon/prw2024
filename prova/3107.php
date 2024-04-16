<?php
$vm = floatval(readline());
$dv = floatval(readline());
$cmv = floatval(readline());

    $tempo = $dv/$vm;
    $combustivel = $dv/$cmv;   
    $tempo = number_format($tempo, 2, ".", "");
    $combustivel = number_format($combustivel, 2, ".", "");
    
    echo "Total horas: $tempo\n";
    echo "Total combustivel: $combustivel\n";
?>