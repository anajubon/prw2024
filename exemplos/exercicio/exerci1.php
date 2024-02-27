<?php
$nome = $_GET['nome'];
$idade = $_GET['idade'];
$salario = $_GET['salario'];

if($idade>=65){
    echo "você esta insento do pagamento no INSS<br>";
}

elseif($salario<= 1212.00){

    $inss = $salario * 0.075;
    echo "o valor a ser pago de INSS é de : $inss";

}

elseif($salario>=1212.01 && $salario<=2427.35){
    $inss = $salario * 0.09;
    echo "o valor a ser pago de INSS é de : $inss";
}

elseif($salario>=2427.36 && $salario<=3641.03){
    $inss = $salario * 0.12;
    echo "o valor a ser pago de INSS é de : $inss";

}

else

?>