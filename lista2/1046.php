<?php
list($a, $b) = explode(' ', readline());

if($a == $b){
    
    echo "O JOGO DUROU 24 HORA(S)\n";
}
elseif($a>$b){

  $hrdejogo = 24-$a+$b;
  
  echo "O JOGO DUROU $hrdejogo HORA(S)\n";
}
else{
  
    $hrdejogo = $b-$a; 

    echo "O JOGO DUROU $hrdejogo HORA(S)\n";
}
?>