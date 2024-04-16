<?php
function aplicaDis($palavra) {// Função que aplica dislalia as trocas comuns
    $trocas = array( // Array das trocas comuns
        'P' => 'B',
        'F' => 'V',
        'T' => 'D',
        'R' => 'L',
        'J' => 'Z',
        'X' => 'S'
    );
    $palavra = strtr($palavra, $trocas);// Aplica trocas na palavra
    return $palavra;
}

function cripto($frase) {// Função que criptografa frase
    $palavras = explode(" ", $frase);// Divide a frase em palavras
    $palavras = array_reverse($palavras);// Inverte a ordem das palavras

    foreach ($palavras as &$palavra) {// Aplica a dislalia em cada palavra
    $palavra = aplicaDis($palavra);
    }

    $frase_cripto = implode(" ", $palavras);// Junta as palavras em uma frase criptografada
    return $frase_cripto;
}

$cases = intval(fgets(STDIN)); // Le o número de casos de teste

for ($i = 0; $i < $cases; $i++) {
    $frase = trim(fgets(STDIN)); // Le a frase
    echo cripto($frase) . "\n"; // Criptografa e imprime a frase
}

?>