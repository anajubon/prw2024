<?php
list($a, $b) = explode(" ", readline());
list($c, $d) = explode(" ", readline());

$dis = (($c - $a) **2 + ($d - $b) **2) **(1/2);
$dis = number_format($dis, 4, ".", "");
    
echo "$dis\n";
?>