<?php
list($x, $y) = explode(" ", readline());

if($x == 0 && $y ==0){
    echo "Origem\n";
}
elseif($x == 0 or $y == 0){
   
    if($x == 0){
        echo "Eixo Y\n";
    }
    else{
        echo "Eixo X\n";
    }

}
elseif($x<0 or $y<0){
   
    if($x<0 and $y<0){
        echo "Q3\n";
    }

    elseif($x<0 and $y>0){
        echo "Q2\n";
    }

    else{
        echo "Q4\n";
    }

}
else{
    echo "Q1\n";
}
?>