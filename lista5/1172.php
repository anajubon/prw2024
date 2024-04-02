<?php
function zeroenegatporum (&$vetor) {
    for ($i = 0; $i < count($vetor); $i++) {
        if ($vetor[$i] <= 0) {
            $vetor[$i] = 1;
        }
    }
}

// vetor inicial
$vetorX = array();

// valores do vetor
for ($i = 0; $i < 10; $i++) {
    $vetorX[$i] = intval(fgets(STDIN));
}

// substituindo os valores negativos e nulos por 1
zeroenegatporum($vetorX);

// vetor resultante
for ($i = 0; $i < count($vetorX); $i++) {
    echo "X[$i] = " . $vetorX[$i] . "\n";
}
?>