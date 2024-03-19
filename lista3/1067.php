<?php
    $x=intval(fgets(STDIN));

    for ($n = 1; $n <= $x; $n += 2) {
        echo $n . PHP_EOL;
    }
?>