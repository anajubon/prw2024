<?php
   
    function sequencia_espelho($in, $fi) {
        $seque = "";
        for ($i = $in; $i <= $fi; $i++) {
            $seque .= $i;
        }
       
        echo $seque . strrev($seque) . PHP_EOL;
    }
   
    $caso = intval(fgets(STDIN));
   
    for ($i = 0; $i < $caso; $i++) {
        list($in, $fi) = array_map('intval', explode(" ", fgets(STDIN)));
        sequencia_espelho($in, $fi);
    }
?>