<?php
//$num1 = $_GET['num1'];
//$num2 = $_GET['num2'];
//$num3 = $num1 + $num2;
//echo" $num3 \n";

$nome = $_GET['nome'];
$email = $_GET['email'];
$senha = $_GET['senha'];
$senhacerta = 123;

if($senha==$senhacerta){
echo "logado com sucesso! <br>";
echo $nome. "<br>";
echo $email. "<br>";
echo $senha. "<br>";
}
else{
    echo "senha/email invalido";

}

?>
