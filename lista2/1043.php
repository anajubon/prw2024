<?php
list($a, $b, $c) = explode(" ", readline());

if($a < $b+$c and $b < $a+$c and $c < $a+$b){
    
    $peri = $a+$b+$c;
    echo "Perimetro = ".number_format($peri, 1, ".", "")."\n";
}
else{
    $area = (($a + $b) * $c) / 2;
    echo "Area = ".number_format($area, 1, ".", "")."\n";
}
?>