<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
    <?php

    $json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

    var_dump(json_decode($json));
    echo "<br><br>";
    var_dump(json_decode($json, true));

    ?>
    </body>
</html>
