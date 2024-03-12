<?php
    $o = explode(" ", readline());
    $o[0] = (float) $o[0];
    $o[1] = (float) $o[1];
    $o[2] = (float) $o[2];
    rsort($o);
    $a=$o[0];
    $b=$o[1];
    $c=$o[2];
    if ($a>=($b+$c)){
        echo "NAO FORMA TRIANGULO\n";
    }
    else{
        if (($a**2) == (($b**2) + pow($c, 2))){
            echo "TRIANGULO RETANGULO\n";
        }
        elseif (($a**2) > (($b**2) + ($c**2))){
            echo "TRIANGULO OBTUSANGULO\n";
        }
        elseif (($a**2) < (($b**2) + ($c**2))){
            echo "TRIANGULO ACUTANGULO\n";
        }

        if (($a==$b) && ($a==$c)){
            echo "TRIANGULO EQUILATERO\n";
        }
        elseif ((($a==$b) && ($a!=$c)) || (($a==$c) && ($a!=$b)) || (($b==$c) && ($b!=$a))){
            echo "TRIANGULO ISOSCELES\n";
        }
    }

?>