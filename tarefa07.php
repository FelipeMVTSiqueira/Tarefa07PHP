<?php
    $a=['a'=>1, 'b'=>2, 'c'=>'Eu <3 JSON'];
    foreach($a as $nome=>$dado){
        echo $nome."=>".$dado." ";
    }
    echo "<br>"."<br>";
    $a=json_encode($a);
    echo $a;
    echo "<br>"."<br>";

    $b=json_decode($a);
    echo $b;
    //da erro pq objetos dessa classe nao podem ser convertidos em strings
    
    