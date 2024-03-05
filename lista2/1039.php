<?php
list($n1, $n2, $n3, $n4)=explode(' ', readline());

$media = ($n1 * 2 + $n2 * 3 + $n3 * 4 + $n4 * 1) / 10;
echo"Media: $media \n";

if ($media >= 7.0) {
    echo "Aluno aprovado.\n";
 
} elseif ($media >= 5.0 && $media < 7) {
    echo "Aluno em exame.\n";
 
    $nex = readline("Nota do exame: ");
 
    $mediaf = ($media + $nex) / 2;
 
    if ($mediaf >= 5.0) {
        echo "Aluno aprovado.\n";
    } else {
        echo "Aluno reprovado.\n";
    }
    echo "Media final: " . number_format($mediaf, 1, '.', '');
} 
 else {
    echo "Aluno reprovado.\n";
 }
?>