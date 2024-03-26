<?php

function rz($num) 
{
    return (int) str_replace('0', '', $num);
}

while (true) 
{

    list($m, $n)=explode(" ", trim(fgets(STDIN)));

    if ($m==0 && $n==0) 
    {
        break;
    }

    $sum=rz($m)+rz($n);

    echo rz($sum)."\n";
}


?>