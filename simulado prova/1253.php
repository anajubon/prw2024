<?php
//decodifica a mensagem usando a Cifra de César
function decifraCifra($msg, $desloc) {
    $decifrado = '';
    $tam = strlen($msg);

    // Percorre cada caractere da msg
    for ($i = 0; $i < $tam; $i++) {
        // Verificar se é uma letra maiúscula
        if (ctype_upper($msg[$i])){
            // Calcula a posição do caractere decifrado
            $posicao_decifrada = ord($msg[$i]) - $desloc;
            // Se a posição for menor que a de 'A', voltar ao final do alfabeto
            if ($posicao_decifrada < ord('A')){
                $posicao_decifrada += 26;
            }
            // Concatenar o caractere decifrado
            $decifrado .= chr($posicao_decifrada);
        }
        else{
            // Se não for uma letra maiúscula, manter o caractere original
            $decifrado .= $msg[$i];
        }
    }

    return $decifrado;
}

// Le número de casos de teste
$casos_teste = intval(trim(fgets(STDIN)));

// Loop casos de teste
for ($i = 0; $i < $casos_teste; $i++) {
    // Leitura da mensagem cifrada e do deslocamento
    $msg_cifrada = trim(fgets(STDIN));
    $desloc = intval(trim(fgets(STDIN)));

    // Decodificar a mensagem e imprimir na saída
    echo decifraCifra($msg_cifrada, $desloc) . "\n";
}

?>