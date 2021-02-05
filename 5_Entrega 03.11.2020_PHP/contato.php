<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fseletro";
    
   // Criando a conexão
   $conn = mysqli_connect($servername, $username, $password, $database);
   
   // Verificando a conexão
   if (!$conn){
       die("A conexão ao BD falhou: " . mysqli_connect_error());
   }

   if(isset($_POST['nome']) && isset($_POST['msg'])){
        $nome = $_POST['nome'];
        $msg= $_POST['msg'];

        $sql = "insert into comentarios (nome, msg) values ('$nome', '$msg')";
        $result = $conn->query($sql);
   }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contato - Full Stack Eletro</title>
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">
</head>

<body>
        <!-- menu -->
        <?php
            include_once('menu.html');
        ?>

    <header>
        <h2>Contato</h2>
    </header>

    <hr>
    <table border=0 width="100%" cellpadding="20">
        <tr>
            <td width="50%" align="center">
                <img src="./imagens/email.png" width="40px">
                <font face="Arial" size="4">contato@fullstackeletro.com</font>
            </td>

            <td width="50%" align="center">
                <img src="./imagens/whatsapp.png" width="80px">
                <font face="Arial" size="4">(11) 99999-9999</font>
            </td>
        </tr>
    </table>
    
    <form method="post" action="">
        Nome:<br> 
        <input type="text" name="nome" style="width:500px"><br>
        Mensagem:<br> 
        <input type="text" name="msg" style="width:500px"><br>

        <input type="submit" name="submit" value="Enviar"><br>   
    </form>

    <?php
    $sql = "select * from comentarios";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($rows = $result->fetch_assoc()){ 
            echo "Data: ". $rows['dia']. "<br/>";
            echo "Nome: ". $rows['nome']. "<br />";
            echo "Mensagem: ". $rows['msg']. "<br />";
            echo "<hr>";
        }
    } else {
        echo "Nenhum comentário ainda!";
    }
        
?>

    <br> <br> <br> <br> <br>

    <footer id="rodape">
        <p id="formas_pagamento"><b>Formas de pagamento:</b></p>
        <img src="./imagens/formasdepagamento.jpeg" alt="Formas de pagamento"; width="20%">
        <p>&copy; Recode Pro</p>
    </footer>

</body>
</html>