<?php
    function M($nu){
        $nu_str = strval($nu);
    
        if (strpos($nu_str, '13') !== false){
            return true;
        }
    
        return false;
    }
    $n = trim(fgets(STDIN));
    
    if (M($n)){
        echo "$n es de Mala Suerte\n";
    
    }
    else{
        echo "$n NO es de Mala Suerte\n";
    }

?>