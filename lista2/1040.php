list($n1, $n2, $n3, $n4) = explode(" ", readline());
$med = ($n1*0.2) + ($n2*0.3) + ($n3*0.4) + ($n4*0.1);
$med=intval($med * 10);
$med=$med/10;
if($med >= 7){
    echo "Media: ".number_format($med, 1, ".", "")."\nAluno aprovado.\n";
}

elseif($med >= 5){
    $nex = floatval(readline());
     echo "Media: ".number_format($med, 1, ".", "")."\nAluno em exame.\n"."Nota do exame: ".number_format($nex, 1, ".", "")."\n";
    
     $med = ($nex+$med)/2;
    
    if($med >= 5){
        echo "Aluno aprovado.\n"."Media final: ".number_format($med, 1, ".", "")."\n";
    }
    else{
        echo "Aluno reprovado.\n"."Media final: ".number_format($med, 1, ".", "")."\n";
    }
}
else{
    
    echo "Media: ".number_format($med, 1, ".", "")."\nAluno reprovado.\n";
}

?>