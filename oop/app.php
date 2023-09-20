<?php
require('./user.php');
require('./member.php');

$obj = new User();
$object = new App\Member\User();
echo $obj->userName();
echo "</br>";
echo $object->userName();
