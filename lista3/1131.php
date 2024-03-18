<?php
list($x, $y, $z, $t, $i) = 0;

while($i != 2){
    $t++;
    list($a, $b) = explode(" ", readline());
    if($a > $b)
    {
        $x++;
    }
    elseif($b > $a)
    {
        $y++;
    }
    else
    {
        $z++;
    }
    $v = 0;
    while($v != 1)
    {
        echo "Novo grenal (1-sim 2-nao)\n";
        $new = intval(readline());
        if($new == 1)
        {
            $i = 0;
            $v = $new;

        }
        elseif($new == 2)
        {
            $v = 1;
        }
        }
        if($new ==2)
        {
            $i = 2;
            echo "$t grenais\n";
            echo "Inter:".number_format($x)."\n";
            echo "Gremio:".number_format($y)."\n";
            echo "Empates:".number_format($z)."\n";
            
            if($x > $y)
            {
                echo "Inter venceu mais\n";
            }
            elseif($y > $x)
            {
                echo "Gremio venceu mais\n";
            }
            else
            {
                echo "Nao houve vencedor\n";
            }
        }
    }
?>