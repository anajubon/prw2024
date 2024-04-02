<?php
    $vetorA = array();
    for ($i = 0; $i < 100; $i++) 
    {
        fscanf(STDIN, "%f", $valor);
        $vetor[] = $valor;
    }
    for ($i = 0; $i < 100; $i++) 
    {
        if ($vetor[$i] <= 10) 
        {
            echo "A[$i] = " . number_format($vetor[$i], 1, '.', '') . "\n";
        }
    }
?>
