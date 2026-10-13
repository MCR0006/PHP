<?php
    echo ("Exercício 1<br><br>");
    function retangulo($altura)
    {
        for ($i=1;$i<=$altura;$i++)
        echo "*****<br>";
    }
    retangulo(20);
    echo ("<br>Exercício 2<br><br>");
    function trocar ($a,$b)
    {
        echo "Recebi em A=$a e em B=$b";
        $aux=$a;
        $a=$b;
        $b=$aux;
        echo "<br> Depois de trocar A=$a e B=$b";
    }
    trocar (5,7);

    echo "<br><br> Grupo 2, exercício 1 <br><br>";
    function inverter($string)
    {
        $tamanho=strlen($string);
        for($i=$tamanho-1;$i>=0;$i--)
        echo $string [$i];
    }
    inverter("david");
?>