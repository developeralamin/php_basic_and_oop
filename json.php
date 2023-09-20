<?php

$array = ['alamin', "nurbobi"];
$array = ['name' => "alamin", "age" => 25];

// {
//     "name":"alaimin"
// }

echo json_encode($array);

// $jsonDecode = '{"name": "alamin","age": 25}';

// var_dump(json_decode($jsonDecode));
