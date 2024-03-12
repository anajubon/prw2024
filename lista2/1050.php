<?php
function DDD($n){

    if($n>30){
        if($n==31){
            echo "Belo Horizonte\n";
        }
        
        elseif($n==32){
            echo "Juiz de Fora\n";
        }
        
        elseif($n==61){
            echo "Brasilia\n";
        }
       
        elseif($n==71){
            echo "Salvador\n";
        }
        
        else{
            echo "DDD nao cadastrado\n";
        }
    }
    
    elseif($n<=30){
        
        if($n==27){
            echo "Vitoria\n";
        }
       
        elseif($n==21){
            echo "Rio de Janeiro\n";
        }
       
        elseif($n==19){
            echo "Campinas\n";
        }
        
        elseif($n==11){
            echo "Sao Paulo\n";
        }
        
        else{
            echo "DDD nao cadastrado\n";
        }
    }
}

$n=intval(readline());

DDD($n);
?>