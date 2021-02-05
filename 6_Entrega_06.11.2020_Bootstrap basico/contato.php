<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fseletro";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
  die("A conexao falhou:" . mysqli_connect_error());
}

if (isset($_POST['nome']) && isset($_POST['mensagem'])) {
  $nome = $_POST['nome'];
  $msg = $_POST['mensagem'];

  $sql = "INSERT INTO comentarios (nome, mensagem) VALUES ('$nome','$msg')";
  $result = $conn->query($sql);
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require_once('bootstrap.html') ?>
  <link rel="stylesheet" href="./css/reset.css">


  <title>Contato_FullStackEletro</title>

  <style>
    body {
      background-color: white;
    }
  </style>

</head>

<body class="d-flex flex-column" style="min-height: 100vh">

  <?php include_once('menu.html') ?>

  <header class="container text-black  border-bottom border-white mb-3" style="padding-top: 60px;">
    <h2>Fale Conosco</h2>
    <p class="lead"></p>
  </header>

  <main class="container flex-fill">

    <section class="row">

      <div class="col-lg-4 d-flex flex-column align-items-center">


        <div class="card bg-danger text-white m-4 w-100">
          <div class="card-body d-flex align-items-center ">
            <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-chat-dots" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z" />
              <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
            </svg>
            <h6 class="card-title m-2">+55 11 99999-9999</h6>
          </div>
        </div>


        <div class="card m-4 bg-danger text-white w-100">
          <div class="card-body d-flex align-items-center ">
            <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
            </svg>
            <h6 class="card-title m-2">contato@fullstackeletro.com</h6>
          </div>
        </div>

      </div>

      <div class="col-lg-4 d-flex justify-content-center">


        <form class="container" method="post">
          <div>
            <h5 class="text-black">Nome:</h5>
            <input type="text" name="nome" class="form-control border border-primary" />
            <br />
            <h5 class="text-black">Mensagem:</h5>
            <textarea name="mensagem" cols="30" rows="10" class="form-control border border-primary"></textarea>
          </div>

          <div class="m-3">
            <input type="submit" value="Enviar" class="font-weight-black btn btn-primary btn-block" />
            <input type="reset" value="Limpar" class="font-weight-black btn btn-secondary btn-block" />
          </div>
        </form>


      </div>

      <div class="col-lg-4 d-flex justify-content-center bg-info text-white mb-4 pb-4 rounded">


        <?php
        $sql = "SELECT * FROM comentarios";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($rows = $result->fetch_assoc()) {
            echo "<br>" . $rows['nome'];
            echo "(" . $rows['data'] . "):<br>";
            echo $rows['mensagem'] . "<br>";
          }
        } else {
          echo "Nenhum comentário ainda!";
        }
        ?>

      </div>

    </section>

  </main>

  <?php include_once('footer.html') ?>

</body>

</html>

























































