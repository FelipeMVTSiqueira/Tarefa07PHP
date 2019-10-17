<?php
    $mensagem = "Este texto sobrescreve o anterior?";
    file_get_contents("texto2.txt");
    $mensagem .= "NAO!";
    file_put_contents("texto2.txt",$mensagem); 
    //Este texto NAO sobrescreve o anterior.
?>