<?php
    $x=34;
    echo $x;
    
    if($x==34)
        echo "<br> O valor é 34.";
    else
        echo "<br> O valor não é 34.";
    
    function paridade($x)
    {
        if($x%2==0)
            echo "<br>$x  é par!";
        else
            echo "<br>$x é ímpar!";
    }

    paridade(300);
    
?>