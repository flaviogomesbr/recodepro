<?php
    $lado1 = 10;
    $lado2 = 30;
    $lado3 = 10;

    
    echo "Sistema de verificação de tipos de triângulos<br/>";
    echo "Primeiro lado é = $lado1<br/>";
    echo "Segundo lado é = $lado2<br/>";
    echo "Terceiro lado é = $lado3<br/>";
    echo "Resultado:<br/>";

    if(($lado1 == $lado2)&&($lado2 == $lado3)){
        echo"Temos um triângulo equilátero, com todos os lados iguais.";
    }else if(($lado1 != $lado2)&&($lado1 != $lado3)&&($lado2 != $lado3)){
        echo"Temos um triângulo escaleno, com todos os lados diferentes";
    }else if(($lado1 == $lado2)||($lado1 == $lado3)|| ($lado2 == $lado3)){
        echo"Temos um triângulo Isóceles, com pelo menos dois lados iguais";
    }
?>
