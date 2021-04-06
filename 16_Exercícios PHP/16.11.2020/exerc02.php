<TYPE html>
<lang="pt-br">

<meta charset="UTF-8">
<meta name = "viewport" content="width=device-width, initial-scale=1.0">
<title> Jason, CEP </title>



<?php

// Retornar dados após digitar um CEP

$cep = '09172180';

$api_cep = file_get_contents("https://viacep.com.br/ws/21715000/json/");

echo "<br/>";
echo "Array";
print_r($api_cep);
echo "<br/>";
var_dump(json_decode($api_cep, true));


?>