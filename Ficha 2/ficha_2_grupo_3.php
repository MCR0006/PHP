<?php

    //Exercício 1
    $vetor=array (1,-2,3,4,5,6,7);
    echo "O elemento mínimo deste array é: " .min($vetor); 
    $media=array_sum($vetor)/7;
    echo "<p>A média deste array é: " .$media;
    $somap=0;$soman=0;
    foreach ($vetor as $a)
        if($a>0)
            $somap=$somap+$a;
        if($a>0)
            $soman=$soman+$a;
    echo "<p> A soma dos números positivos é: " .$somap;
    echo "<p> A soma dos números negativos é: " .$soman."<p><p>";
    //Exercício 2
    $chave=array();
    for($i=0;$i<=5;$i++) 
    {
        $num=rand(1,50);
        if(in_array($num,$chave)==0)
            {$chave [$i]=$num;echo $num.",";}
        else
        $i--;
}

// ou

for($i=0;$i<=5;$i++) 
{
    $num=rand(1,50);
    if(in_array($num,$chave)==0) {
        $chave[$i]=$num;
    }
    else
        $i--;
}

echo "<p>" .implode(", ", $chave);

//Exercício 3
$cavalos=array("Cavalo 1"=>"88","Cavalo 2"=>"22","Cavalo 3"=>"13","Cavalo 4"=>"11","Cavalo 5"=>"78","Cavalo 6"=>"98","Cavalo 7"=>"23","Cavalo 8"=>"111","Cavalo 9"=>"7","Cavalo 10"=>"19");
asort($cavalos); $a=1;
foreach ($cavalos as $chave1 => $valor1)
    if ($a==1)
 {echo  "<p> O vencedor é: $chave1 com $valor1 segundos."; break;}

?>