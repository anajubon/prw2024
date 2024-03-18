<?php
$a=intval(readline());
$b=1;
if (1<$a and $a<1000)
{
    for ($n=0;$n<$a;$n++)
    {
        $x=$b**2;
        $y=$b**3;
        echo "$b"."$x"."$y\n";
        $b=$b+1;
    }
}
?>