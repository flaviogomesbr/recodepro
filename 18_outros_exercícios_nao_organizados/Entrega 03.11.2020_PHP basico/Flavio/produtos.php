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
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Produtos - Full Stack Eletro</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <script src="js/funcoes.js"></script> 
</head>
<body>
        <!-- menu -->
        <?php
            include_once('menu.html');
        ?>

    <h2>Produtos</h2>
    <hr>
        <aside class="categorias">
            <h3>Categorias: </h3>
            <ul>
                <li onclick="exibir_todos()">Todos (12)</li>
                <li onclick="exibir_categoria('geladeira')">Geladeiras (3)</li>
                <li onclick="exibir_categoria('fogao')">Fogões (2)</li>
                <li onclick="exibir_categoria('microondas')">Micro-ondas (3)</li>
                <li onclick="exibir_categoria('lavaloucas')">Lava-louças (2)</li>   
                <li onclick="exibir_categoria('lavaroupas')">Lavadora de roupas (2)</li>
            </ul>
        </aside>

        <!-- 1a linha com 4  produtos -->
        <div class="produtos">
        <?php
                $sql = "select * from produto";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($rows = $result->fetch_assoc()) {

            ?>
                <div class="box_produto" id="<?php echo $rows["categoria"]; ?>">
                    <img src="<?php echo $rows["imagem"]; ?>" alt="<?php echo $rows["categoria"]; ?>"  width="120px" onclick="destaque1(this)">
                    <br>
                    <p class="item"><?php echo $rows["descricao"]; ?></p>
                    <hr>
                    <div class="descricao"><strike>R$ <?php echo $rows["preco"]; ?></strike></div>
                    <div class="preco">R$ <?php echo $rows["precofinal"]; ?></div>
                </div>
            <?php 
                    }
                }
                else {
                    echo "Não há produtos cadastrados";
                }
            ?>
        </div>
    </div>

    <footer id="rodape">
        <p id="formas_pagamento"><b>Formas de pagamento:</b></p>
        <img src="./imagens/formasdepagamento.jpeg" alt="Formas de pagamento"; width="20%">
        <p>&copy; Recode Pro</p>
    </footer>
    
</body>
</html>
