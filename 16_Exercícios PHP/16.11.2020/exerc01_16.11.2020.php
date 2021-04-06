<?php

// h2 com ID e h3 com quote

$item = file_get_contents("https://gturnquist-quoters.cfapps.io/api/random");
$item2 = file_get_contents("https://gturnquist-quoters.cfapps.io/api/random");
    
$obj = json_decode($item);
$arr = json_decode($item2, true);

echo "<h1> {$obj->value->id}</h1>
    <h2> {$obj->value->quote}</h2>";

$id = ($arr['value']['id']);
$quote = ($arr['value']['quote']);

echo "<h1>{$id}</h1>
    <h2>{$quote}</h2>";

?>