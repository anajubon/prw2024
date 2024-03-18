<?php
while(true)
{
list($a, $b)=explode(" ", readline());

if($a==0 or $b==0)
{
    break;
}
elseif($a<0 or $b<0)
{
    if($a<0 and $b<0)
    {
        echo "terceiro\n";
    }
    elseif($a<0)
    {
        echo "segundo\n";
    }
    else
    {
        echo "quarto\n";
    }
}
else
{
    echo "primeiro\n";
}
}
?>