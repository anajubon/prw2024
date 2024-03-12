<?php
$sal = floatval(readline());

if($sal>0 && $sal<=400.00){
    
    $rsal= $sal*0.15;
    $nsal= $sal+$rsal;
    echo "Novo salario: ".number_format($nsal, 2, ".", "")."\nReajuste ganho: ".number_format($rsal, 2, ".", "")."\nEm percentual: 15 %\n";
}

elseif($sal<=800.00){

    $rsal= $sal*0.12;
    $nsal= $sal+$rsal;
    echo "Novo salario: ".number_format($nsal, 2, ".", "")."\nReajuste ganho: ".number_format($rsal, 2, ".", "")."\nEm percentual: 12 %\n";
}

elseif($sal<=1200.00){
    
    $rsal= $sal*0.10;
    $nsal= $sal+$rsal;
    echo "Novo salario: ".number_format($nsal, 2, ".", "")."\nReajuste ganho: ".number_format($rsal, 2, ".", "")."\nEm percentual: 10 %\n";
}

elseif($sal<=2000.00){

    $rsal= $sal*0.07;
    $nsal= $sal+$rsal;
    echo "Novo salario: ".number_format($nsal, 2, ".", "")."\nReajuste ganho: ".number_format($rsal, 2, ".", "")."\nEm percentual: 7 %\n";
}

else{

    $rsal= $sal*0.04;
    $nsal= $sal+$rsal;
    echo "Novo salario: ".number_format($nsal, 2, ".", "")."\nReajuste ganho: ".number_format($rsal, 2, ".", "")."\nEm percentual: 4 %\n";
}
?>