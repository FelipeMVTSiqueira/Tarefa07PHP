<!-- <?php
    // $idArquivo = "texto.txt";
    // function taAqui($texto){
    //     for($i=0;$i<50;$i++){
    //         $abrindoArquivo = fopen($texto, "a+");?>
    //     <!DOCTYPE html>
    //         <html>
    //             <?php //file_put_contents($texto,"Ola, mundo!,testando"."\r\n", FILE_APPEND);?>
    //         </html>
    //     <?php
    //     }
    // };
    // taAqui($idArquivo);
    // $arquivo = fopen('texto.txt', 'w');
    // $tamanho = filesize('texto.txt');
    // $conteudo = fread($arquivo, $tamanho);
?> -->
<?php
    $arquivo = fopen("texto.txt","r");
    if ($arquivo){
        while (($linha = fgets($arquivo))) {
            echo $linha;
        }
    }
    fclose($arquivo);