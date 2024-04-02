<?php
//calcula o termo de Fibonacci
function fibonacci($n) 
{
    $fib = array();
    $fib[0] = 0;
    $fib[1] = 1;

    for ($i = 2; $i <= $n; $i++) 
    {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }

    return $fib[$n];
}

$caso = intval(fgets(STDIN));

for ($i = 0; $i < $caso; $i++) {
    // le o valor de N para o caso
    $n = intval(fgets(STDIN));

    // calcula termo de Fibonacci
    $fibonacci = fibonacci($n);

    echo "Fib($n) = $fibonacci\n";
}
?>