<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
</head>
<body>
<?php
function mais8($numero)
{
    $numero += 8;
    echo $numero;
    echo "<br>";
}

$a = 3;
mais8($a); //$a continua valendo 3
echo $a;
?>
</body>
</html>