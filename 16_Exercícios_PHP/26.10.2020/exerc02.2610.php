<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
</head>
<body>
<?php
    function soma($num1, $num2)
    {
        $somaval = $num1+$num2;
        return $somaval;
    }

    $num1 = 10;
    $num2 = 45;
    echo soma($num1, $num2);
?>
</body>
</html>