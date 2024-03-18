<?php
$vp=0;
for ($n=1;$n<=5;$n++)
{
    $x=floatval(readline());
    if ($x%2==0)
    {
        $vp+=1;
    }
}
echo "$vp valores pares\n";
?>