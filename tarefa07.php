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

    echo $b["c"]." | ".$b["a"]." | ".$b["b"]." | "."<br>"."<br>";

    
$categorias=json_decode(file_get_contents('categorias.json'),true);

var_dump($categorias);

echo "<br>"."<br>";


foreach($categorias as $key => $arrays){
    echo$key."<br>"."<br>";
    foreach($arrays as $array){
        foreach($array as $key => $value){
            if(is_numeric($value)){
            } else {?>
                <!DOCTYPE html>
                    <html>
                        <input type="checkbox">
                    </html>
                <?php echo $value;
                echo "<br>"."<br>";
            };
        }
    }
    echo "<br />";
}

echo "<br>"."<br>";
