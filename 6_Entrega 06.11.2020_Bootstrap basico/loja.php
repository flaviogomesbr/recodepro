<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require_once('bootstrap.html') ?>
  <link rel="stylesheet" href="./css/reset.css">


  <title>Lojas</title>

  <style>
    body {
      background-color: white;
    }
  </style>

</head>

<body class="d-flex flex-column" style="min-height: 100vh">

  <?php include_once('menu.html') ?>

  <header class="container text-black  border-bottom border-white mb-3" style="padding-top: 60px;">
    <h2>Nossas Lojas</h2>
  </header>

  <main class="container flex-fill">

    <section class="row">

      <div class="col-lg-4 d-flex justify-content-center">
        <div class="card text-black bg-light m-3" style="min-width: 15rem;">
          <div class="card-header font-weight-bold">Rio de Janeiro</div>
          <div class="card-body">
            <p class="card-text">Av. Presidente Vargas, 5000</p>
            <p class="card-text">10° Andar</p>
            <p class="card-text">Centro</p>
            <p class="card-text">(21) 3333-3333</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 d-flex justify-content-center">
        <div class="card text-black bg-light m-3" style="min-width: 15rem;">
          <div class="card-header font-weight-bold">São Paulo</div>
          <div class="card-body">
            <p class="card-text">Av. Paulista, 985</p>
            <p class="card-text">3° Andar</p>
            <p class="card-text">Jardins</p>
            <p class="card-text">(11) 4444-4444</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 d-flex justify-content-center">
        <div class="card text-black bg-light m-3" style="min-width: 15rem;">
          <div class="card-header font-weight-bold">Santa Catarina</div>
          <div class="card-body">
            <p class="card-text">Rua Major Ávila, 370</p>
            <p class="card-text">Vila Mariana</p>
            <p class="card-text">(47) 5555-5555</p>
          </div>
        </div>
      </div>

    </section>

  </main>

  <?php include_once('footer.html') ?>

</body>

</html>
















































