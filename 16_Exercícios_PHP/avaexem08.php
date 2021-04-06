<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>

<?php

$nomes = array(
    10 => "Pedro",
    "dev" => "Antonia",
    3.1415 => "Beto",
    true => "Julia"
);
print_r(array_values ($nomes));
?>
    </body>
</html>
