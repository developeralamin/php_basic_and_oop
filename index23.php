<?php
echo ("nurnobi ");
$number = 4.25;
print_r($number);
var_dump($number);
echo $number;
print(gettype($number));
echo '</br>';
$arrAy = [1, 2, 9, 5, 84];
print_r($arrAy);

$float_num = 10.9;
echo (int) $float_num;
echo "<br/>";

$number = 5;
$number2 = 2;
echo $number % $number2; //2.5
echo "<br/>";

for ($i = 0; $i < 10; $i++) {
    if ($i % 2 == 0) {
        echo $i;
    }
    $i++;
}
