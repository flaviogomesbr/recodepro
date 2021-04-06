<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Tabuada do 0 ao 10</title>
</head>

<body>
<?php
$a = 0;
while ($a <= 10) {
    for ($i=0; $i <= 10; $i++) { 
        echo "$a * $i = ".$a * $i;
        echo "<br>";           
    }
    echo "<br>";
    $a++;
}
?>
</body>
</html>