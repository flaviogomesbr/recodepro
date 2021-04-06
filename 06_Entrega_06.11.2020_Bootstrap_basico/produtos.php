      <div class=" col-md-3 pb-4 font-weight-bold text-white">
          <li class="nav-item"> <button class="btn btn-outline-danger w-100 font-weight-bold" onclick="todasCategorias()">Todos (12) </button></li>
          <li class="nav-item"> <button class="btn btn-outline-danger w-100 font-weight-bold" onclick="exibirCategoria('microondas')">Micro-ondas (3) </button></li>
          <li class="nav-item"> <button class="btn btn-outline-danger w-100 font-weight-bold" onclick="exibirCategoria('lavaloucas')">Lava-louças (2) </button></li>
          <li class="nav-item"> <button class="btn btn-outline-danger w-100 font-weight-bold" onclick="exibirCategoria('lavaroupas')">Lavadora de roupas (2) </button></li>
        </ul>
      </div>

      <div class=" col-md-9  d-flex flex-wrap justify-content-around">


        <?php
        $sql = "SELECT * FROM produto";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($rows = $result->fetch_assoc()) {
        ?>

            <div class="box-item" id="<?php echo $rows["categoria"]; ?>" >
              <div class="card bg-light m-4" style="width: 13rem; height: 25rem">
                <img style = "width: 120px;" src="<?php echo $rows["imagem"]; ?>" class="card-img-top mx-auto d-block" alt="<?php echo $rows["imagem"]; ?>">
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
          echo "Não há produtos cadastrados";
        }
        ?>



      </div>

    </section>



  </main>

  <?php include_once('footer.html') ?>
     
</body>

</html>













