<?php
$np=0;
for ($n=1;$n<=6;$n++)
{
    $x = floatval(readline());
    if ($x>0)
    {
        $np+=1;
    }
}
echo "$np valores positivos\n";
?>