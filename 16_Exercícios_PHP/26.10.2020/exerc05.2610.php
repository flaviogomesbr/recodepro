<?php
	$servidor = “localhost”;
	$login = “root”;
	$senha = “”;
	$bancodados = “fseletro”; 
	$link = mysqli_connect($servidor, $login, $senha, $bancodados);
 
    	if (!$link) 
	      	die (“Falha na conexão com o BD ".mysqli_connect_errno());
	else
    		echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL.“;
 
    	mysqli_close($link);
?>
