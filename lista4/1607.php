<?php
function operacoes($a, $b)
{
    $x = strlen($a);
    $o = 0;

    for ($i = 0; $i < $x; $i++) 
    {
        $di = ord($b[$i]) - ord($a[$i]);
        if ($di < 0) 
        {
            $di += 26;
        }
        $o += $di;
    }
    return $o;
}
$y = intval(fgets(STDIN));

for ($i = 0; $i < $y; $i++) 
{
    list($a, $b) = explode(" ", trim(fgets(STDIN)));
    echo operacoes($a, $b) . PHP_EOL;
}
?>