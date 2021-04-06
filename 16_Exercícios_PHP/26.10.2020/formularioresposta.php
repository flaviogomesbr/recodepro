<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Recebe Dados</title>
    <meta charset="UTF-8" />
</head>

    <!-- 
        TRABALHO 1
        Criar um arquivo html de nome formularioenvio.html
        Criar uma tag <form> para que o usuário informe os seguintes dados:	
        nome (texto)	senha (texto)	gênero (radio button)	turno (checkbox)	cidade (select) botão enviar (botão)
        Após a digitação das informações, as mesmas devem ser enviadas via método POST para o arquivo php de nome formularioresposta.php possa receber as informações e fazer a exibição das mesmas.
        Além do botão enviar, colocar o botão de limpar "reset".
    !-->

Olá, <?php echo $_POST['nome']; ?>! <br/>
Sua senha é <?php echo $_POST['senha']; ?>. <br/>
Seu gênero é <?php echo $_POST['genero']; ?>. <br/>
Seu turno é <?php echo $_POST['turno']; ?>. <br/>
Sua cidade é <?php echo $_POST['cidade']; ?>. <br/>

  
    <body>
        <p><font face="Fantasy,Arial,Helvetica, sans-serif" size="3">
            <a href="trab01.2610.html">Clique aqui para voltar ao formulario</a>
            </font>
    </body>
</html>

