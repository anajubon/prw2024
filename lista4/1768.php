<?php
while($n=fgets(STDIN))
{
    $n_ast=1;
    $p=ceil($n/2);
    for($i=1;$i<=ceil($n/2);$i++)
    {
        $li=str_pad("",$p-1," ",STR_PAD_LEFT);
        $li=str_pad($li,$p-1+$n_ast,"*",STR_PAD_RIGHT);
        echo $li."\n";
        $p--;
        $n_ast=$n_ast+2;
    }
    $meio=ceil (($n_ast-2)/2);
    $li=str_pad ("",$meio-1," ",STR_PAD_LEFT);
    $li=str_pad ($li,$meio-1+1,"*",STR_PAD_RIGHT); 
    echo $li."\n";
    $li=str_pad ("",$meio-2," ",STR_PAD_LEFT);
    $li=str_pad ($li,$meio-2+3,"*",STR_PAD_RIGHT);
    echo $li."\n\n";
}
?>