<?php
$x=intval(readline());
$a=0;
if(5< $x and $x<2000)
{
    if($x%2==0)
    {
        for($n=0;$n<$x/2;$n++)
        {
            $a+=2;
            $b=$a**2;
            echo "$a^2 = $b\n";
        }
    }
    else
    {
        for($n=0;$n<($x-1)/2;$n++)
        {
            $a+=2;
            $b=$a**2;
            echo "$a^2 = $b\n";
        }
    }
}
?>