<?php

// preenche o vetor conforme as regras especificadas
function preencheVetor($valor) 
{
    $vetor = array(); 
    $vetor[0] = $valor; // primeira posição recebe o valor lido

    // preenche as posições subsequentes do vetor
    for ($i = 1; $i < 10; $i++) 
    {
        $vetor[$i] = $vetor[$i - 1] * 2;
    }

    return $vetor; //vetor preenchido
}

// lendo o valor inteiro da entrada
$valor = intval(fgets(STDIN));

// verifica se o valor está dentro do intervalo permitido
if ($valor <= 50)
{
    // chama a função para preencher o vetor
    $vetorfinal = preencheVetor($valor);

    // vetor final
    for ($i = 0; $i < count($vetorfinal); $i++)
    {
        echo "N[$i] = " . $vetorfinal[$i] . "\n";
    }
} 
else 
{
    echo "O valor fornecido excede o limite permitido (50).\n";
}

?>