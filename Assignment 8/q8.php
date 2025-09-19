<?php
$arr = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");

asort($arr);
print_r($arr);
echo "<br>";

ksort($arr);
print_r($arr);
echo "<br>";

arsort($arr);
print_r($arr);
echo "<br>";

krsort($arr);
print_r($arr);
?>

