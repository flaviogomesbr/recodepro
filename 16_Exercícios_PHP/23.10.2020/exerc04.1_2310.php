<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
  $num = '-';
  $num1 = 5;
  $num2 = 5;
  switch($num){

    case '+': $num =  $num1 + $num2; break;
    case '-': $num =  $num1 - $num2; break;
    case '*': $num =  $num1 * $num2; break;
    case '/': $num =  $num1 / $num2; break;
    case '%': $num =  $num1 % $num2; break;
  }
  echo " Este é o resultado da operação ".$num;

?>
</body>
</html>
