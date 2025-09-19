<?php
$array = [1, 2, 3, 4, 5];
$insert = '$';
$position = 3;  
array_splice($array, $position, 0, $insert);
print_r($array);
?>

