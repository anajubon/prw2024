<?php
$vp=0;
$vi=0;
$vpo=0;
$vn=0;
for ($n=1;$n<=5;$n++)
{
    $x=floatval(readline());

    if ($x%2==0)
    {
        $vp+=1;
    }
    else{
        $vi+=1;
    }
    if ($x>0)
    {
        $vpo+=1;
    }
    if ($x<0)
    {
        $vn+=1;
    }
}
echo "$vp valor(es) par(es)\n"."$vi valor(es) impar(es)\n"."$vpo valor(es) positivo(s)\n"."$vn valor(es) negativo(s)\n";
?>