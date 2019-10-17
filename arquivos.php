<?php
    $idArquivo = "texto.txt";
    function taAqui($texto){
        $abrindoArquivo = fopen($texto, "a+");
        file_put_contents($texto, "Ola, mundo!,testando"."<br>", FILE_APPEND);
    };
    taAqui($idArquivo);
?>