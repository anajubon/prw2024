<?php
$x=0;
for ($n=1;$n<=100;$n++)
{
    $y=intval(readline());
    
    if ($y>$x)
    {
        $x=$y;
        $a=$n;
    }
}
printf($x."\n");
printf($a."\n");
?>