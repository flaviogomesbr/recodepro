<?php
/* Exercicio 01

1 - Criar dois Arrays;
2 - Imprimir dados dos Arrays;
3 - Juntar dois Arrays - merge;
4 - Utilizar uma função diferente da ensinada nos Arrays; */

$array1 = [10, 9, 8, 7];
$array2 = ['Ingles', 'Matematica', 'Geografia', 'Portugues'];
echo"<pre>";
print_r($array1);
echo"<pre>";
print_r($array2);
$result = array_merge($array1, $array2);
$var = 'Espanhol';
echo"<br>";
array_push($result, 'Portugues', 'Espanhol');
print_r($result);


