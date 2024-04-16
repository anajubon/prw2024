    <?php
    //lendo o número de consultas que serão feitas
    $k = intval(fgets(STDIN));
    list($n, $m) = explode(" ", readline());
    for ($i=0; $i<$k; $i++) {
        list($x, $y) = explode(" ", readline());
    }
    $zobri=readline();

    if($x == $n && $y == $m){
        
    }
    elseif($x == $n or $y == $m){
      echo "divisa\n";
    }
    elseif($x<$n or $y<$m){
    
        if($x<$n and $y<$m){
            echo "SO\n";
        }

        elseif($x<$n and $y>$m){
            echo "NO\n";
        }

        else{
            echo "SE\n";
        }

    }
    else{
        echo "NE\n";
    }  
?>