<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Tabuada do 0 ao 10 em numeros pares</title>
</head>

<body>
<?php

// Criar um arquivo .php para que seja feita uma tabuada com base em um intervalo de valores. 
// Ou seja, deverá ser informado o valor inicial e final da tabuada. 
// O cálculo deverá ser feito o do valor zero até o valor 10. Contudo, é fundamental que seja exibido apenas os valores pares referente ao intervalo de valor imputado.

for($i=0; $i <= 10; $i=$i+2){
    echo '<div style=" margin: 10px 2px; width: 140px; border: none; display: inline-block;">';
    for($o=0; $o <= 10; $o++){
        echo $i. ' x ' .$o. ' = ' .$i*$o. '<br/>';
    }
    echo '</div>';
}


?>
</body>
</html>