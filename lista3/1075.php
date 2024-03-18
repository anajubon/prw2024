<?php
$x=intval(readline());

for($n=1;$n<=10000;$n++)
{
    $a=$n%$x;
   
    if ($a==2)
    {
        printf($n."\n");
    }
}
?>