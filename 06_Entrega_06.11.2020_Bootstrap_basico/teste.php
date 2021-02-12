<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "fseletro";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
  die("A conexao falhou:" . mysqli_connect_error());
}


        $sql = "SELECT * FROM comentarios";
        $result = $conn->query($sql);
        print_r($result);
        $teste = $result->num_rows;
        print_r ($teste);
        echo $teste;


        if ($result->num_rows > 0) {
          while ($rows = $result->fetch_assoc()) {
            echo "<br>" . $rows['nome'];
            echo "(" . $rows['data'] . "):<br>";
            echo $rows['msg'] . "<br>";
          }
        } else {
          echo "Nenhum comentário ainda!";
        }
        ?>