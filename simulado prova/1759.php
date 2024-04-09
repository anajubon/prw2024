<?php
$n = intval(fgets(STDIN));

for ($i=0; $i<$n; $i++) {
    echo "Ho";
    
    if ($i != $n-1) {//se o n for diferente de i imprimi espaço se não ele é o ultimo e imprime !
        echo " ";
    } 
    else {
        echo "!\n";
    }
}
?>