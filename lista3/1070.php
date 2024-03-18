<?php
$x=intval(readline());

if($x%2==0)
{
    $x-=1;
    for($n=0;$n<6;$n++){
        $x+=2;
        echo $x."\n";
    }
}

else
{
    echo $x."\n";

    for($n=0;$n<5;$n++)
    {
        $x+=2;
        echo $x."\n";
    }
}
?>