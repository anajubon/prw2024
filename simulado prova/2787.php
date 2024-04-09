<?php
function corCID($linha, $coluna){
    $total_casas = $linha * $coluna;
    if (($linha + $coluna) %2 == 0){
        return 1;
    } 
    else{
        return 0; 
    }
}

$linha = intval(trim(fgets(STDIN)));
$coluna = intval(trim(fgets(STDIN)));

$cor_cid = corCID($linha, $coluna);

echo $cor_cid. "\n";