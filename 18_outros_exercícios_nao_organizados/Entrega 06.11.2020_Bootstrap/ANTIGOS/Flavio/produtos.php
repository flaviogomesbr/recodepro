<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fseletro";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
  die("A conexao falhou:" . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require_once('bootstrap.html') ?>
  <link rel="stylesheet" href="./css/reset.css">
  <script defer src="./js/script.js"></script>

  <title>Produtos_FullStackEletro</title>

  <style>
    body {
      background-color: white;
    }
  </style>

</head>

<body class="d-flex flex-column" style="min-height: 100vh">


  <?php include_once('menu.html') ?>

  <header class="container text-black border-bottom border-white mb-3" style="padding-top: 60px;">
    <h2>Produtos</h2>

  </header>

  <main class="container flex-fill">

    <section class="row">
      <div class=" col-md-3 pb-4 font-weight-bold text-white">
        <h3>Categorias</h3>
        <ul class="nav flex-column">
          <li class="nav-item"> <button class="btn btn-outline-danger w-100 font-weight-bold" onclick="allCategories()">Todos (12) </button></li>
          <li class="nav-item"> <button class="btn btn-outline-danger w-100 font-weight-bold" onclick="filterCategory('geladeira')">Geladeiras (3) </button></li>
          <li class="nav-item"> <button class="btn btn-outline-danger w-100 font-weight-bold" onclick="filterCategory('fogao')">Fogões (2) </button></li>
          <li class="nav-item"> <button class="btn btn-outline-danger w-100 font-weight-bold" onclick="filterCategory('microondas')">Micro-ondas (3) </button></li>
          <li class="nav-item"> <button class="btn btn-outline-danger w-100 font-weight-bold" onclick="filterCategory('lavaloucas')">Lava-louças (2) </button></li>
          <li class="nav-item"> <button class="btn btn-outline-danger w-100 font-weight-bold" onclick="filterCategory('lavaroupas')">Lavadora de roupas (2) </button></li>
        </ul>
      </div>

      <div class=" col-md-9  d-flex flex-wrap justify-content-around">


        <?php
        $sql = "SELECT * FROM produto";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($rows = $result->fetch_assoc()) {
        ?>

            <div class="produto" id="<?php echo $rows["categoria"]; ?>" style="display: inline-block">
              <div class="card bg-light m-4" style="width: 13rem; height: 24rem">
                <img src="./<?php echo $rows["imagem"]; ?>" class="card-img-top" alt="<?php echo $rows["imagem"]; ?>">
                <div class="card-body text-center">
                  <p class="card-text font-weight-bold " style="font-size: 0.8rem;"><?php echo $rows["descricao"]; ?></p>
                  <h7 class="card-title" style="text-decoration: line-through;">R$ <?php echo $rows["preco"]; ?></h7>
                  <h6 class="card-title text-primary font-weight-bold">R$ <?php echo $rows["precofinal"]; ?></h6>
                </div>
              </div>
            </div>

        <?php
          }
        } else {
          echo "Nenhum produto cadastrado!";
        }
        ?>



      </div>

    </section>



  </main>

  <?php include_once('footer.html') ?>

</body>

</html>













