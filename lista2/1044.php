<?php
list($a, $b) = explode(" ", readline());

if($a>$b){
   
    if($a%$b == 0){
        echo "Sao Multiplos\n";
    }
    
    else{
        echo "Nao sao Multiplos\n";
    }
}

elseif($b>$a){
    
    if($b%$a == 0){
        echo "Sao Multiplos\n";
    }
    
    else{
        echo "Nao sao Multiplos\n";
    }
}

elseif($b == $a){
    echo "Sao Multiplos\n";
}

else{
    echo "Nao sao Multiplos\n";
}
?>