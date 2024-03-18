<?php
$x=intval(readline());
$a=array();
$b=0;

for ($n=1;$n<=$x;$n++)
{
    $y=floatval(readline());
    
    if($y==0)
    {
        array_splice($a, $b, 0, "NULL");
    }
    
    elseif($y%2==0)
    {
        if($y>0)
        {
            array_splice($a, $b, 0, "EVEN POSITIVE");
        }
        else
        {
            array_splice($a, $b, 0, "EVEN NEGATIVE");
        }
    }
    else
    {
        if($y>0)
        {
            array_splice($a, $b, 0, "ODD POSITIVE");
        }
        else
        {
            array_splice($a, $b, 0, "ODD NEGATIVE");
        }
    }
    $b++;
}
foreach ($a as $elemento)
{
    echo $elemento . "\n";
}
?>