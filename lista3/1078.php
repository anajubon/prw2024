<?php
$x=intval(readline());
$a=$x;
$b=1;
if (2<$x and $x<1000)
{
    for($n=0;$n<10;$n++)
    {
        $x=$a*$b;
        echo $b.' x '.$a.' = '.$x."\n";
        $b=$b+1;
    }
}
?>