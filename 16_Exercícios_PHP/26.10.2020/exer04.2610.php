<?php
    $link = mysqli_connect("localhost", "root", "", "fseletro");
 
    if (!$link)
        die ("Falha na conexão com o BD " . mysqli_connect_errno());
    else
        echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL.";
    
    mysqli_close($link);
