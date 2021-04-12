<?php
    $servername="localhost";
    $username="root";
    $password ="";
    $database="fseeletro";

    // Criando a conexão

    $conn = mysqli_connect($servername, $username, $password, $database);

    //Verificando a conexão
    if (!$conn){
        die("A conexão ao BD falhou:" . mysqli_connect_error());

    }

    if(isset($_POST['nome']) && isset($_POST ['msg'])){
        $nome = $_POST['nome'];
        $msg = $_POST ['msg'];

        
        

        $sql = "insert into comentarios (nome , msg) values ('$nome', ' $msg')";
        $result = $conn ->query ($sql);
    }
  

  
    ?>



<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Página Inicial</title>
        <link href="css/estilo.css" rel="stylesheet">

    </head>
    <body>

    <?php
        include('menu.html');
    ?>

    <br><br>
    <h1> Fale conosco </h1><hr>

    <div class ="lojas">
        
            <img src="imagem/email.png" width ="40px">
            <font face="Arial" size ="4"> contato@fukkstackeletro.com<br></font>
        </div>

        <div class ="lojas">
            <img src="imagem/wht.png" width ="60px">
            <font face ="Arial" size="4"> (11) 99999-9999</font>
        </div>
    </div>
    <br><br><br>
    <br><br><br>
    <br><br><br>

    <form method ="post" action="">
    Nome: <br>
    <input type ="text" name="nome" style ="width: 500px"><br>
    Mensagem: <br>
    <input type ="text" name="msg" style ="width: 500px"><br>
    <input type ="submit" name="submit" value ="Enviar"><br>
    </form>

    <?php
          $sql ="select * from comentarios";
          $result = $conn -> query($sql);
      
          if ($result-> num_rows > 0){
             while($rows = $result-> fetch_assoc()){
                echo "Data: " ,$rows['data'], "<br>";
                echo "Nome: " ,$rows['nome'], "<br>";
                echo "Mensagem: " ,$rows['msg'], "<br>";
                echo "<hr>";
               
                

            }
      
        }else{
            echo"Nenhum comentário ainda!";
        }


  ?>





    
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
        
    <div class="footer">    
       Formas de pagamento
       <br>
       <img src="imagem/logop.jpg" width="380" height="100">
       <br>
       <p class="rodape">&copy; Recode 2020</p>

    </div>




    </body>
</html>