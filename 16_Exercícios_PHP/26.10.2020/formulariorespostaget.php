<?php
    $media = ($_GET['nota1'] + $_GET['nota2']) / 2;
    $nome = $_GET['nome'];
    if ($media >= 7) 
    {
        print("Aluno $nome aprovado com a média $media");
    }
    else 
    {
        print("Aluno $nome reprovado com a média $media");
    }
?>

<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <p><font face="Helvetica, arial, sans-serif" size="4">
            <a href="formularioenvioget.html">Voltar ao formulrio</a>
        </font>
    </body>
</html>