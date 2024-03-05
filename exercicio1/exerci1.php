<?php
$nome = $_GET [ 'nome' ];
$idade = $_GET [ 'idade' ];
$salario = $_GET [ 'salário' ];

/*calculos inss */
if ( $salario >= 0.01 and $salario <= 1412 ){

    $inss = $salario/100*7.5;
}

if ( $salario >=1412.01 and $salario<= 2666.68 ){

    $inss = $salario/100*9;
}

if ( $salario >= 2666.69 and $salario <= 4000.03 ){

    $inss = $salario/100*12 ;
}

if ( $salario >= 4000.04 and $salario <= 7786.02 ){
    
    $inss = $salario/100*14;
}

/*calculos imposto de renda*/
if( $salario >= 0.01 and $salario <=2112.00 and $idade < 65 ){

    $ir = 0;
}

if( $salario >= 2112.00 and $salario <= 2866.65 and $idade < 65 ){

    $ir = ($salario-$inss)*0.075-158.40;
}

if( $salario >= 2866.66 and $salario <= 3751.05 and $idade < 65 ){

    $ir = ($salario-$inss)*0.15-370.40;
}

if( $salario >= 3751.06 and $salario <= 4664.68 and $idade < 65 ){

    $ir = ($salario-$inss)*0.225-651.73;
}

if( $salario > 4664.69 and $idade < 65 ){

    $ir = ($salario-$inss)*0.275-884.96;
}

$salliqui = $salario-$inss-$ir;

echo $nome."seu salário bruto é de : ".$salario."<br> seu salário líquido é de : ".$salliqui."<br> o valor do seu INSS é de : R$"
.number_format($inss, 2, '.', '')."<br> o valor do seu imposto de renda é de : R$".number_format($ir, 2, '.', '');
?>