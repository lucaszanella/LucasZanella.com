<?php
$json_string = '/v3/info.json';
$jsondata = file_get_contents($json_string);
$indexpages = json_decode($jsondata,true);
$lang = 'en';
$helper = $indexpages['multipages'][$lang]["2"];
if (array_key_exists('maths', $helper)) {
print('<p>correct');
}
?>