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

$entrada1 = 0;
$entrada2 = 10;
$con = $entrada1;
$sw = 1;

echo 'Intervalo '.$entrada1.' e '.$entrada2.'<br>';

while($con <= $entrada2){
    if($con % 2 == 0){
        for($i = 1 ; $i <= 10; $i++){
            if($sw == 1){
                echo '<br>******** Tabuado do '.$con.' *******<br><br>';
                $sw = 0;
            }
            echo $con.' x '.$i.' = '.($i * $con).'<br>';
        }
        $sw = 1;
    }
    $con++;
}

?>
</body>
</html>