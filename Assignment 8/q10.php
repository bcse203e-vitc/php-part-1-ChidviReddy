<?php
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");
$result = [];

foreach ($array1 as $key => $value) {
    $result[$key] = array_merge([$array2[$key]], $value);
}

print_r($result);
?>

