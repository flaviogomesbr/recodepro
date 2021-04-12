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
  

  
    ?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <script src="js/funcao.js"></script>
        <meta charset="utf-8"/>
        <title> Página Inicial</title>
        <link href="css/estilo.css" rel="stylesheet">
        
        

    </head>
    <body>

    <?php
        include('menu.html');
    ?>

    <p class ="titulos"> Nossos Produtos</p>
    <hr>

    <div id="categoria">
    Categorias
        <ol>
            <li onclick="exibir_todos()"> Todos(16)</li>
            <li onclick="exibir_categoria('geladeira')"> Geladeira (4)</li>
            <li onclick="exibir_categoria('lavaseca')">Lava e Seca(5)</li>
            <li onclick="exibir_categoria('fogoes')">Fogão (4)</li>
            <li onclick="exibir_categoria('forno')">Forno de Embutir(3)</li>

        </ol>
    </div>

    <div class="container">

    <?php
          $sql ="select * from produto";
          $result = $conn -> query($sql);
      
          if ($result-> num_rows > 0){
             while($rows = $result-> fetch_assoc()){
                
    ?>
    
    
    
    <div class="box_produtos" id=<?php echo $rows["categoria"]; ?> style="display: inline-block;">
    <img src =<?php echo $rows["imagem"]; ?> width="150px" onclick="destaque1 (this)">
    <p> <?php echo $rows["descricao"]; ?> 
    <hr>
    De:<strike> R$  <?php echo $rows["preco"]; ?> </strike> por:
    <p class="valor">R$ <?php echo $rows["preco_venda"]; ?> </p>
  
</div>

   <?php 
      
              }
      
          }else{
              echo"Nenhum prduto cadastrado!";
          }


    ?>

        <!--Produto 1-->

       


        <!--

        <!-Produto 2-
        <div class="box_produtos" id="geladeira" style="display: inline-block;">
            <img src ="imagem/gel2.jpg" width="150px" onclick="destaque2 (this)">
            <p> Geladeira Electrolux RE31 240L Branco 1 Porta 127V
            <hr>
            De: <strike>R$ 1309,90 </strike> por:
            <p class="valor">R$ 1.289,90
            <p class="parcelas"> até 10 x de R$ 128,99 sem juros
            <br>
        </div>

        <!-Produto 3--
        <div class="box_produtos" id="geladeira" style="display: inline-block;">
            <img src ="imagem/gela3.jpg" width="150px" onclick="destaque3 (this)">
            <p> Geladeira Electrolux 2 Portas DC35A 260L Branca 110V
             <hr>
            De: <strike> R$1.800,00 </strike> por:
            <p class="valor">R$1.599,90
            <p class="parcelas"> até 10x de R$ 239,90 sem juros
        </div>

        <!-Produto 4--
        <div class="box_produtos" id="geladeira" style="display: inline-block;">   
            <img src ="imagem/gel4.jpg" width="150px" onclick="destaque4 (this)">
            <p> Geladeira Electrolux Top Freezer TF42 382</p>
            <hr>
            De: <strike> R$2.599,90 </strike> por:
            <p class="valor">R$2.399,00
            <p class="parcelas"> até 10 de R$239,90 sem juros 

        </div>
      
        <!-Produto 5--
        <div class="box_produtos" id="fogoes" style="display: inline-block;">
            <img src ="imagem/fog1.jpg" width="150px" onclick="destaque5 (this)"><br>
            Fogão de Embutir 4 Bocas preto Atlas Top Gourmet Glass Bivolt
            <hr>
            De: <strike>R$ 2.000,00</strike> por:
            <p class="valor">R$1 1.749,00
            <p class="parcelas"> até 10x de R$ 189,90 sem juros
            
        </div>

        <!-Produto 6--
        <div class="box_produtos" id="fogoes" style="display: inline-block;">
            <img src ="imagem/fog2.jpg" width="150px" onclick="destaque6 (this)"><br>
            Fogão de Embutir 4 Bocas Preto Atlas Top Gourmet Glass Bivolt
            <hr>
            De: <strike>R$ 2.100,00</strike> por:
            <p class="valor">R$ 1749,00
            <p class="parcelas"> até 10x de R$ 174,90 sem juros 
 
        </div>

        <!-Produto 7--
        <div class="box_produtos" id="fogoes" style="display: inline-block;">
            <img src ="imagem/fog3.jpg" width="150px" onclick="destaque7 (this)"><br>
            Fogão de Embutir 5 Bocas preto Atlas Top Gourmet Glass Bivolt
            <hr>
            De: <strike> R$1.983,58</strike> por:
            <p class="valor">R$ 1.899,00 
            <p class="parcelas">até 10x de R$ 189,90 sem juros 
        </div>

        <!-Produto 8--
        <div class="box_produtos"id="fogoes" style="display: inline-block;">
            <img src ="imagem/fog4.jpg" width="150px" onclick="destaque8 (this)"><br>
            Fogçao de Piso 5 Bocas Consul CF5VAR - Bivolt<hr>
            De: <strike> R$ 1.686,50</strike> por:
            <p class="valor">R$1.439,10 
            <p class="parcelas">até 10x R$ 143,91 sem juros
            <br>
        </div>

        <!-Produto 9--
        <div class="box_produtos" id="lavaseca" style="display: inline-block;">
            <img src ="imagem/maq1.jpg" width="150px" onclick="destaque9 (this)">
            Máquina de Lavar Electrolux 13Kg Branca LAC13 - 110V
            <hr>
            De: <strike>R$ 1.850,00</strike> por:
            <p class="valor">R$ 1.659,00 
            <p class="parcelas"> até 10x de R$ 165,90 sem juros 
        </div>

        <!-Produto 10--
        <div class="box_produtos" id="lavaseca" style="display: inline-block;">
            <img src ="imagem/maq2.jpg" width="150px" onclick="destaque10 (this)">
            Máquina de Lavar Electrolux LAC16 - 110V
            <hr>
            De: <strike>R$ 1.699,90</strike> por:
            <p class="valor">R$ 1.694,90 
            <p class="parcelas">até 10x de  R$ 169,49 sem juros
        </div>

          <!-Produto 11--
          <div class="box_produtos" id="lavaseca" style="display: inline-block;">
            <img src ="imagem/maqu3.jpg" width="150px" onclick="destaque11 (this)">
            Lavadora Consul 13kg Maxi Economia 220V CWE13ABBNA 
            <hr>
            De: <strike>R$ 2.000,00</strike> por:
            <p class="valor">R$ 1.849,00 
            <p class="parcelas"> até 10x de  R$ 184,90 sem juros
        </div>

         <!-Produto 12--
         <div class="box_produtos" id="lavaseca" style="display: inline-block;">
            <img src ="imagem/maq4.jpg" width="150px" onclick="destaque12 (this)">
            Máquina de Lavar Consul 13kg Branca Láia 110V
            <hr>
            De: <strike>R$ 1.780,90</strike> por: 
            <p class="valor">R$ 1.729,00 
            <p class="parcelas">até 10x de  R$ 172,90 sem juros
        </div>

        <!-Produto 13--
        <div class="box_produtos" id="lavaseca" style="display: inline-block;">
            <img src ="imagem/maq4.jpg" width="150px" onclick="destaque13 (this)">
            Máquina de Lavar Consul 13kg Branca Láia 110V
            <hr>
            De: <strike>R$ 1.780,90</strike> por:
            <p class="valor">R$ 1.729,00 
            <p class="parcelas"> até 10x de  R$ 172,90 sem juros
        </div>

        <!-Produto 14--
        <div class="box_produtos" id="forno" style="display: inline-block;">
            <img src ="imagem/micro1.jpg" width="150px" onclick="destaque14 (this)"><br>
           Micro-ondas Brastemp BMS45CR 32 Litros Inox 110V
            <hr>
            De: <strike>R$ 780,00</strike> por:
            <p class="valor">R$ 638,20 
            <p class="parcelas"> até 10x de  R$ 63,82 sem juros
        </div>

          <!-Produto 15--
        <div class="box_produtos" id="forno" style="display: inline-block;">
            <img src ="imagem/micro2.jpg" width="150px" onclick="destaque15 (this)"><br>
           Micro-ondas Brastemp Espelahdo Grill 32 Litros Inox 110V
            <hr>
            De: <strike>R$ 1.000,00</strike> por:
            <p class="valor">R$ 899,00 
            <p class="parcelas">até 10x de  R$ 89,90 sem juros
        </div>

          <!-Produto 16--
        <div class="box_produtos" id="forno" style="display: inline-block;">
            <img src ="imagem/micro3.jpg" width="150px" onclick="destaque16 (this)"><br>
           Micro-ondas de Embutir 10 litros BLT M030 EIN Inox
            <hr>
            De: <strike>R$ 1.300,00</strike> por:
            <p class="valor">R$ 1.198,50 
            <p class="parcelas">até 10x de  R$ 119,85 sem juros
        </div>


    </div>
-->

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