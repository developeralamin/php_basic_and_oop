<?php

echo date("h:i:sa");
echo date("Y-M-D");

echo "</br>";
date_default_timezone_set("asia/dhaka");
echo date("Y-m-d h:i:sa");
echo "</br>";
$d = strtotime("next Friday");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
