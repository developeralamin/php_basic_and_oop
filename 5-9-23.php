<?php
// echo $_SERVER['REQUEST_TIME'];
// $time_start = microtime(true);
// echo $time_start;

// $str = "Bangladesh Thakurgoan";
// $search_pattern = "/thakurgoan/i";
// echo preg_match($search_pattern, $str);
// echo "</br>";

$str = "Bangladesh Thakurgoan Angle";
$search_pattern = "/an/i";
echo preg_match_all($search_pattern, $str);
