<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
</head>
<body>
<?php
    // EXERCÍCIO 2
    //Criar um programa em PHP para verificar os lados de um triângulo.
    //Informar valores para as variáveis e através de uma estrutura de controle exibir a informação do nome do triângulo.
    //Atividade com 15minutos de duração.
    //Escaleno: todos os lados são diferentes
    //Isósceles: Apenas dois lados são iguais
    //Equilátero: Todos os lados são iguais

    $a = 4;
    $b = 3;
    $c = 4;

    echo "Sistema de verificação de tipos de triângulos<br/> <br/>";
    echo "Primeiro lado é = $a<br/>";
    echo "Segundo lado é = $b<br/>";
    echo "Terceiro lado é = $c<br/> <br/>";
    echo "Resultado:<br/>";

    if (($a !== $b) && ($a !== $c) && ($b !== $c))
        echo "Triângulo escaleno, pois todos os lados são diferentes <br>";

    else if (($a == $b) && ($a == $c) && ($b == $c))
        echo "Triângulo equilátero, pois todos os lados são iguais";

    else 
        echo "Triângulo isósceles, pois apenas dois lados são iguais";
?>
</body>
</html>