<?php
$np=0;
$a=array();
for ($n=1;$n<=6;$n++)
{
    $x=floatval(readline());
    if ($x>0)
    {
        array_splice($a, $np, 0, $x);
        $np+=1;
    }
}
$soma=array_sum($a);
$quant=count($a);
$media=$soma/$quant;
echo "$np valores positivos\n";
echo "".number_format($media, 1, ".", "")."\n";
?>