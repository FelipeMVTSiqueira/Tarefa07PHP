<?php
    $a=["a"=>1, "b"=>2, "c"=>"Eu <3 JSON"];
    foreach($a as $nome=>$dado){
        echo $nome."=>".$dado." ";
    }
    echo "<br>"."<br>";
    $a=json_encode($a);
    echo $a;
    echo "<br>"."<br>";

    $b=json_decode($a,true);
    foreach($b as $nome=>$dado){
        echo $nome."=>".$dado."<br>";
    }

    echo $b["c"]." | ".$b["a"]." | ".$b["b"]." | ";

    echo "<br<"."<br>";
    
//     file_put_contents(,{“categorias” : [
//         {“id”: 1, “nome”: “Esportes”},
//         {“id”: 2, “nome”: “História”},
//         {“id”: 3, “nome”: “Entretenimento”},
//         {“id”: 4, “nome”: “Geografia”},
//         {“id”: 5, “nome”: “Arte”}
//         ]
//     }
// );
    
    