<?php
list($a, $b, $c) = explode(" ", readline());

if($a>$b and $a>$c){
   
    if($b>$c){
        echo "$c\n"."$b\n"."$a\n\n"."$a\n"."$b\n"."$c\n";
    }
    else{
        echo "$b\n"."$c\n"."$a\n\n"."$a\n"."$b\n"."$c\n";
    }
}

if($b>$a and $b>$c){
    
    if($a>$c){
        echo "$c\n"."$a\n"."$b\n\n"."$a\n"."$b\n"."$c\n";
    }
    else{
        echo "$a\n"."$c\n"."$b\n\n"."$a\n"."$b\n"."$c\n";
    }
}

if($c>$a and $c>$b){
   
    if($a>$b){
        echo "$b\n"."$a\n"."$c\n\n"."$a\n"."$b\n"."$c\n";
    }
    else{
        echo "$a\n"."$b\n"."$c\n\n"."$a\n"."$b\n"."$c\n";
    }
}
?>