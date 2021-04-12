<?php

session_start();

//Se não existir um valor do índice 'nome', então encerre a aplicação
if (!isset($_SESSION['nome'])) {
    header('Location: index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meu Perfil - Novo Site</title>
    <link rel="stylesheet" type="text/css" href="css/perfil.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="./js/funcoes.js"></script>
  </head>

  <body>
    <!-- Início do menu -->
    <div class="container-fluid">
      <div class="row">
        <nav class="col-lg-2 navbar navbar-expand-lg navbar-light d-flex 
        align-items-start">          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="col collapse navbar-collapse pt-2" id="navbarSupportedContent">           
          <ul class="navbar-nav mr-auto d-flex flex-column">
            <li class="nav-item mx-auto">
              <a href="index.php">
              <img src="./img/leao.png" alt="logo do site" width="100px" />
              </a>
            </li>
            <li class="nav-item mx-auto active">
                <a class="nav-link" href="perfil_usuario.php">
                  <img class="avatar mb-2 mx-auto" src="<?php echo $_SESSION['imagem']; ?>"
                  alt="<?php echo $_SESSION['nome']; ?>">
                  <span> Meu Perfil </span> </a>
            </li>
            <li class="nav-item mx-auto">
                <a class="nav-link" href="home_cursos.php"> Cursos <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mx-auto">
                <a class="nav-link" href="certificados.php"> Certificados </a>
            </li>
            <li class="nav-item mx-auto">
                <a class="nav-link" href="parceiros.php"> Parceiros </a>
            </li>
            <li class="nav-item mx-auto">
                <a class="nav-link" href="configuracao.php"> Configuração </a>
            </li>
          </ul>
          </div>
        </nav>
          <!-- Fim do menu -->
          
          <!-- Início da seção perfil -->
          <!-- Seção 1 -->
        <section class="container col-lg-9 painel-form mt-5">
          <div class="container-form">
            <form class="d-flex align-items-center mt-5" action="perfil.php" method="post">
                <div class="col-lg-3 d-flex justify-content-center">
                  <img src="<?php echo $_SESSION['imagem'] ?>" class="avatar-perfil" alt="<?php echo $_SESSION['nome']; ?>">
                </div>
                
                <div class="col-lg-9">
                  <div class="row mb-3">
                    <div class="col-lg-3">
                      <input type="text" class="form-control form-grupo1" id="apelido" name="apelido">
                      <small for="apelido">Apelido:</small>
                    </div>
                    <div class="col-lg-6">
                      <input type="text" class="form-control form-grupo1" id="nome" name="nome">
                      <small for="nome">Nome:</small>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3">
                      <input type="text" class="form-control form-grupo1" id="nascimento" name="nascimento">
                      <small for="data-nasc">Data de Nascimento:</small>
                    </div>
                    <div class="col-lg-6">
                    <input type="text" class="form-control form-grupo1" id="sexo" name="sexo">
                    <small for="sexo">Sexo:</small>
                    </div>
                  </div>
                </div> 
           
         </div>

         <!-- Seção 2 -->
         <div class="container-form">
           
                <div class="col-lg-12">

                  <div class="row mb-3">
                    <div class="col-lg-4 col-md-6">
                      <input type="text" class="form-control form-grupo1" id="endereco" name="endereco">
                      <small for="rua">Rua:</small>
                    </div>

                    <div class="col-lg-4 col-md-6">
                      <input type="text" class="form-control form-grupo1" id="bairro" name="bairro">
                      <small for="bairro">Bairro:</small>
                    </div>

                    <div class="col-lg-3 col-md-6">
                      <input type="text" class="form-control form-grupo1" id="cidade" name="cidade">
                      <small for="cidade">Cidade:</small>
                    </div>

                    <div class="col-lg-2 col-md-2">
                    <input type="text" class="form-control form-grupo1" id="estado" name="estado">
                    <small for="estado">Estado:</small>
                    </div>

                    <div class="col-lg-4 col-md-4">
                    <input type="text" class="form-control form-grupo1" id="cep" name="cep">
                    <small for="cep">CEP:</small>
                    </div>

                    <div class="col-lg-4 col-md-4">
                    <input type="text" class="form-control form-grupo1" id="pais" name="pais">
                    <small for="pais">País:</small>
                    </div>
                  </div>
                </div> 
    
         </div>

         <!-- Seção 3 -->
          <div class="container-form mt-2">
            <p> Em que situação se enquadra? </p>
          
                <div class="col-lg-9">
                  <div class="row mb-3">

                    <div class="col-lg-3 col-md-3">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="situacao" id="ouvinte" value="Ouvinte" checked>
                        <label class="form-check-label" for="ouvinte">
                          Ouvinte
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="situacao" id="surdo" value="Surdo">
                      <label class="form-check-label" for="surdo">
                        Surdo
                      </label>
                    </div>
                    </div>
                  </div>
                  
                  <p> Grau de deficiência auditiva </p>
                  <div class="row">                    
                    <div class="col-lg-3 col-md-3">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="grau" id="leve" value="Leve">
                        <label class="form-check-label" for="leve">
                          Leve
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="grau" id="moderada" value="Moderada">
                      <label class="form-check-label" for="moderada">
                        Moderada
                      </label>
                    </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-3">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="grau" id="severa" value="Severa">
                        <label class="form-check-label" for="severa">
                          Severa
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="grau" id="outro" value="Outro">
                      <label class="form-check-label" for="outro">
                        Surdo
                      </label>
                    </div>
                    </div>

                  </div>
                </div> 
           
         </div>

         <!-- Seção 4 -->
          <div class="container-form" style="border-bottom: none !important;">
        
                <div class="col-lg-12">

                  <div class="row mb-3">
                    <div class="col-lg-4 col-md-6">
                      <input type="email" class="form-control form-grupo1" id="email" name="email">
                      <small for="email">Email:</small>
                    </div>

                    <div class="col-lg-4 col-md-6">
                      <input type="password" class="form-control form-grupo1" id="senha" name="senha">
                      <small for="senha">Senha:</small>
                    </div>

                    <div class="col-lg-4 col-md-6">
                      <input type="password" class="form-control form-grupo1" id="conf-senha" name="conf_senha">
                      <small for="conf-senha">Confirmar senha:</small>
                    </div>

                    <div class="col-lg-2 col-md-2 d-flex justify-content-center">
                    <button type="reset" class="btn nova-cor text-white mt-2"> Cancelar</button>                                       
                    </div>

                    <div class="col-lg-4 col-md-4 d-flex justify-content-center">
                    <button type="reset" class="btn nova-cor text-white mt-2">Atualizar</button>
                    </div>

                   
                    <section class="mt-5 p-5">
                    <div class="alert alert-danger" role="alert">
                    Cuidado! Ao Remover sua Conta, não Poderá ser Recuperada!
                    </div>
                    <button type="button" class="btn btn-danger" onclick="confirmar()">Remover Conta</button>
                    </section>

                  </div>
                </div> 
            </form>  
         </div>
      </section>
                      <!-- Fim da seção perfil -->
          </div>
        </div>



        <script>
          function confirmar(){
          let confirmacao = confirm("Você Realmente Deseja Excluir sua Conta?");

          if (confirmacao == true) {
        location.href = "remover_conta.php?id=" + <?php echo $_SESSION['id'] ?>
            }
          }
        </script>

    <!-- JS Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
