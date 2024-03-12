<?php
$renda = floatval(readline());

    if($renda>=0 && $renda<=2000.00){
        echo "Isento\n";
    }
    
    elseif($renda<=3000.00){
        echo "R$ ".number_format((($renda- 2000)*0.08), 2, ".", "")."\n";
    }
    elseif($renda<=4500.00){
        echo "R$ ".number_format((($renda- 3000)*0.18 + 1000*0.08), 2, ".", "")."\n";
    }
    else{
        echo "R$ ".number_format((($renda- 4500)*0.28 + 1000*0.08+ 1500*0.18), 2, ".", "")."\n";
    }
?>