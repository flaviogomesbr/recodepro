<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
</head>
<body>
<?php
    // EXERCÍCIO 4
   // Criar um arquivo .php para criar uma estrutura de switch case onde deverá ser informado uma valor numérico ou um símbolo que represente as operação aritmética. 
   // As operações a serem executadas são: soma; subtração; multiplicação; divisão e resto da divisão.

   $simbolo = "8";

   switch($simbolo)
   {
       case"+": $simbolo = "Digitou símbolo de soma."; break; 
       case"-": $simbolo = "Digitou símbolo de subtração."; break;
       case"*": $simbolo = "Digitou símbolo de multiplicação."; break;
       case"/": $simbolo = "Digitou símbolo de divisão."; break;
       case"^": $simbolo = "Digitou símbolo de exponenciação."; break;
       default: echo "ERRO: digite um valor aceitável, meu abençoado. <br/> Você digitou: ";
   }
     echo $simbolo;
?>
</body>
</html>