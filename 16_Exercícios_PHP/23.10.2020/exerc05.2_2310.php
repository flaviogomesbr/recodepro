<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
</head>

<body>
<?php 
    $tabu = 5;
    $contador = 0;
    

    while($contador <= 10){
        $resultado = $tabu * $contador;
        echo "$tabu  x $contador = $resultado ", "<br>";
        $contador++;
    }
?>
</body>
</html>
