<?php
// echo readfile('student.txt');

// $myFile = fopen('student.txt', 'w');

// echo fread($myFile, filesize('student.txt'));

// fclose($myFile);

$myFile = fopen('student.txt', 'w');
$txt = "Nurnobi islam";
$txt = "Nurnobi islam thakurgaon";
$txt = "alamin";
echo fwrite($myFile, $txt);
fclose($myFile);
