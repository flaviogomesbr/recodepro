<?php

abstract class Connection
{
    protected static function getDb(){
    $conn = new PDO("mysql:host=localhost;dbname=fseletro;charset=utf8",
    "root",
    ""
    );

    if ($conn) {
        return $conn;
        //echo "Connection";
    } else {
        echo  "<h1>Connection error!</h1>";
    }
}
}

