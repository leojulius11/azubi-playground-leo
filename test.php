<?php


$array = [
  "Hamburg",
  "München",
  "Nürnberg",
  "Frankfurt",
];

var_dump($array);

foreach ($array as $value) {

if ($value === "Hamburg") {
echo  "Hamburg ist vorhanden" . PHP_EOL;
}
echo "$value ist eine Stadt" . PHP_EOL;
}
