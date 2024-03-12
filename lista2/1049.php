<?php
function classificacao($p1, $p2, $p3) {
    switch (true) {
        
        case $p1=="vertebrado" && $p2=="ave" && $p3=="carnivoro":
            return "aguia\n";
        
        case $p1=="vertebrado" && $p2=="ave" && $p3=="onivoro":
            return "pomba\n";
        
        case $p1=="vertebrado" && $p2=="mamifero" && $p3=="onivoro":
            return "homem\n";
        
        case $p1=="vertebrado" && $p2=="mamifero" && $p3=="herbivoro":
            return "vaca\n";
        
        case $p1=="invertebrado" && $p2=="inseto" && $p3=="hematofago":
            return "pulga\n";
        
        case $p1=="invertebrado" && $p2=="inseto" && $p3=="herbivoro":
            return "lagarta\n";
        
        case $p1=="invertebrado" && $p2=="anelideo" && $p3=="hematofago":
            return "sanguessuga\n";
        
        case $p1=="invertebrado" && $p2=="anelideo" && $p3=="onivoro":
            return "minhoca\n";
    }
}

$p1 = readline();
$p2 = readline();
$p3 = readline();

echo classificacao($p1, $p2, $p3);
?>