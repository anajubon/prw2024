<?php
    list($A, $B, $C) = explode(" ", readline());
    $delta = ($B * $B) - (4 * $A * $C);
    
    if($A==0 || $delta<0)
    {
        echo "Impossivel calcular\n";
    }
    else{
        $R1=(-1*$B + sqrt($delta)) / (2 * $A);
        $R2=(-1*$B - sqrt($delta)) / (2 * $A);
    
        echo"R1 = ". number_format($R1, 5, '.', '') . "\n";
        echo"R2 = ". number_format($R2, 5, '.', '') . "\n";
    }
?>