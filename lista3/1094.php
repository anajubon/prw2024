<?php
$x=intval(readline());
list($c, $r, $s) = 0;

for($n=0;$n<$x;$n++)
{
    list($a, $b) = explode(" ", readline());
    
    if($a>=1 and $a<=15)
    {
        if($b=='C')
        {
            $c=$c+$a;
        }
        elseif($b=='R')
        {
            $r=$r+$a;
        }
        else
        {
            $s=$s+$a;
        }
    }
}

$total=$c+$r+$s;
echo "Total: $total cobaias\n"."Total de coelhos: $c\n"."Total de ratos: $r\n"."Total de sapos: $s\n";
echo "Percentual de coelhos: ".number_format(($c*100)/($total), 2, ".", " ")." %\n";
echo "Percentual de ratos: ".number_format(($r*100)/($total), 2, ".", " ")." %\n";
echo "Percentual de sapos: ".number_format(($s*100)/($total), 2, ".", " ")." %\n";
?>