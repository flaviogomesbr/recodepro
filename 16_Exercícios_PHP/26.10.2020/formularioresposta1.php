<?php
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $genero = $_POST['genero'];
    $turno = $_POST['turno'];
    $cidade = $_POST['cidade'];

    echo "Os dados recebidos do formulário são: <p>";
    echo "
    <table width = '400' border='1' cellspacing='0' cellpadding='0'>
        <tr>
            <td width = '100'>Nome:<td>
            <td width = '300'>$nome</td>
            </tr>
        <tr>
            <td width = '100'>Senha:<td>
            <td width = '300'>$senha</td>
        </tr>
        <tr>
            <td width = '100'>Genero:<td>
            <td width = '300'>$genero</td>
        </tr>
        <tr>
            <td width = '100'>Turno:<td>
            <td width = '300'>$turno</td>
        </tr>
        <tr>
            <td width = '100'>Cidade:<td>
            <td width = '300'>$cidade</td>
        </tr>
    </table>
";
?>

<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <p><font face="Arial, Helvetica, sans-serif" size="4">
            <a href="formularioenvio.html">Clique aqui para voltar ao formulrio</a>
        </font>
    </body>
</html>