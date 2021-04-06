<?php
//Criar um arquivo com extensão php1 - 
// Criar antes do DOCTYPE três variáveis e em cada uma das variáveis colocar um determinado conteúdo. 
// Uma das variáveis deverá ser a do título;2 - Na tag <title> colocar o conteúdo da variável título;3 - 
// Na tag <body> colocar em cada parágrafo a ser criado por você o conteúdo da variável. Lembrando que como são duas variáveis deverão existir dois parágrafos; 
// 4 - A variável deverá estar dentro do texto a ser criado por você. //

    $titulo = '<strong>Exercício 01</strong>';
    $conteudo1 = 'Texto 1';
    $conteudo2 = 'Texto 2';
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> <?php echo $titulo; ?> </title>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $titulo; ?></title>

    </head>
    <body>
        <?php
            echo $titulo;
        ?>
        <p>Parágrafo 1: "<?php echo $conteudo1 ?>" </b></p>
        <p>Parágrafo 2: "<?php echo $conteudo2 ?>" </b></p>
        </body>
</html>