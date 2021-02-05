<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require_once('bootstrap.html') ?>
  <link rel="stylesheet" href="./css/reset.css">


  <title>Home_FullStackEletro</title>

  <style>
    body {
      background-color: white;
    }
  </style>

</head>

<body class="d-flex flex-column" style="min-height: 100vh; min-width: 100vw">

  <?php include_once('menu.html') ?>

  <header class="container text-black  border-bottom border-black mb-3" style="padding-top: 60px;">
    <h2>Seja bem vindo(a)!!!</h2>
    <p class="lead">Aqui em nossa loja, <em>programadores</em> tem desconto para sua casa!</p>
  </header>

  <main class="container flex-fill d-flex flex-column text-center text-black justify-content-around">

    <h3>Vem aí a BlackFriday! </h3>
    <br />
    <div class="container text-center text-black font-weight-bold ">
    <img src="./imagens/blackfriday2.gif" alt="Gif de carrinho" height="400px" />
    </div>
    <br />
    <h3></h3>
    <br />
  </main>

  <?php include_once('footer.html') ?>

</body>

</html>

