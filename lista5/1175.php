<?php
for ($i = 0; $i < 20; $i++)
{
    $vetor[$i] = intval(fgets(STDIN));
}

for ($i = 0; $i < 10; $i++)
{
    $temp = $vetor[$i];
    $vetor[$i] = $vetor[19 - $i];
    $vetor[19 - $i] = $temp;
}

for ($i = 0; $i < 20; $i++) 
{
    echo "N[" . $i . "] = " . $vetor[$i] ."\n";
}

?>