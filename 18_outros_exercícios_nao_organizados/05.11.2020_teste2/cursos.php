<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/listas_curso.css">
   <script src="js/funcoes.js"></script>
         <title>Cursos</title>
    </head>
<body>
    <?php require_once('./navbar\footer/menuLogado.html')?>

<div class ="container">
    <div class="box_cursos">
        <img src="imgs/medicina.png" width="170px" onclick="destaque1 (this)">
        <a href="./curso.php?curso=5"> Medicina</a>
    </div>

    <div class="box_cursos">

        <img src="imgs/negocio.png" width="170px" onclick="destaque2 (this)">
        <a href="./curso.php?curso=1"> Economia</a>
    </div>

    <div class="box_cursos">

        <img src="imgs/jornalismo.png" width="170px" onclick="destaque3 (this)">
        <a href="./curso.php?curso=6"> Comunicação Social - Midialogia</a>
    </div>

    <div class="box_cursos">

        <img src="imgs/engenhariadesoftware.png" width="170px" onclick="destaque4 (this)">
        <a href="./curso.php?curso=3"> Engenharia de Software</a>
    </div>

    <div class="box_cursos">

        <img src="imgs/gastronomia.png" width="170px" onclick="destaque5 (this)">
        <a href="./curso.php?curso =7"> Nutrição</a>
    </div>


    <div class="box_cursos">

        <img src="imgs/farmacia.png" width="170px" onclick="destaque6 (this)">
        <a href="./curso.php?curso=4"> Farmácia</a>
    </div>

   
    <div class="box_cursos">

        <img src="imgs/ambiente.png" width="170px" onclick="destaque7 (this)">
        <a href="./curso.php?curso=2"> Engenharia Ambiental</a>
    </div>


</div>

    <?php require_once('./navbar\footer/footerLogado.html')?>

</body>
</html>    