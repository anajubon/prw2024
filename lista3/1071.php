<?php
function a($n)
{
    return $n%2!=0;
}

function b($x, $y)
{
    $sum=0;
    if($x>$y)
    {
        $t=$x;
        $x=$y;
        $y=$t;
    }
    
    for($i=$x+1;$i<$y;$i++)
    {
        if(a($i))
        {
            $sum+=$i;
        }
    }
    return $sum;
}
$x=intval(readline());
$y=intval(readline());

$sum=b($x, $y);
echo "$sum\n";

?>