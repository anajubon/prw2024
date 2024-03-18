<?php
while(true)
{
    $x=intval(readline());
    
    if($x==2002)
    {
        echo "Acesso Permitido\n";
        break;
    }
    else
    {
        echo "Senha Invalida\n";
    }
}
?>