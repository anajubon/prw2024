<?php
$x=intval(readline());
$in=0;
$out=0;

for($n=0;$n<$x;$n++)
{
    $a=intval(readline());
    
    if($a>=10 and $a<=20)
    {
        $in++;
    }
    else
    {
        $out++;
    }
}
echo "$in in\n"."$out out\n";
?>