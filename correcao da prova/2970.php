<?php
while(true){
    $k=intval(readline());
    if($k==0)
        break;
    $div=array_map('intval',explode(" ", readline()));

    for($i=0;$i<$k;$i++){
        $con=array_map('intval',explode(" ", readline()));

        if($con[0]==$div[0] || $con[1]==$div[1]){ //ou
            echo "divisa\n";
        }
        elseif($con[0]<$div[0] && $con[1]>$div[1]){ //e
            echo "NO\n";
        }
        elseif($con[0]>$div[0] && $con[1]>$div[1]){ //e
            echo "NE\n";
        }
        elseif($con[0]>$div[0] && $con[1]<$div[1]){ //e
            echo "SE\n";
        }
        else{
            echo "SO\n";
        }
    }
}
?>