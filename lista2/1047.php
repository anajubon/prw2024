<?php
list($a, $b, $c, $d) = explode(' ', readline());

if($a == $c and $b == $d){
   
   echo "O JOGO DUROU 24 HORA(S) E 0 MINUTO(S)\n";
}
elseif($a<$c and $b<$d){
  
  $hrdejogo = $c-$a; 
  $mindejogo = $d-$b;
  
  echo "O JOGO DUROU $hrdejogo HORA(S) E $mindejogo MINUTO(S)\n";
}

elseif($a<$c and $b == $d){
 
  $hrdejogo = $c-$a; 
  
  echo "O JOGO DUROU $hrdejogo HORA(S) E 0 MINUTO(S)\n";
}

elseif($a<$c and $b>$d){
  
  $hrdejogo = ($c-$a) -1; 
  $mindejogo = 60-($b-$d);
  
  echo "O JOGO DUROU $hrdejogo HORA(S) E $mindejogo MINUTO(S)\n";
}

elseif($a>$c and $b>$d){
  
  $hrdejogo = (24-$a+$c) -1;
  $mindejogo = 60-($b-$d);
 
  echo "O JOGO DUROU $hrdejogo HORA(S) E $mindejogo MINUTO(S)\n";
}

elseif($a>$c and $b == $d){
 
  $hrdejogo = (24-$a+$c);
  
  echo "O JOGO DUROU $hrdejogo HORA(S) E 0 MINUTO(S)\n";
}
elseif($a>$c and $b<$d){
  
  $hrdejogo = (24-$a+$c);
  $mindejogo = $d-$b;
  
  echo "O JOGO DUROU $hrdejogo HORA(S) E $mindejogo MINUTO(S)\n";
}
elseif($a == $c and $b<$d){
  $mindejogo = $d-$b;
  echo "O JOGO DUROU 0 HORA(S) E $mindejogo MINUTO(S)\n";
}
elseif($a == $c and $b>$d){
  $mindejogo = 60- ($b-$d);
  echo "O JOGO DUROU 23 HORA(S) E $mindejogo MINUTO(S)\n";
}
?>