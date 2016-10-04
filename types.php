<?php

$integer = 42;
$float = 11.55465;
echo $integer . PHP_EOL;
echo $float . PHP_EOL;

$string = "Moin";
echo $string . PHP_EOL;

$bool = false;
var_dump($bool);




$zahl1 = 55;
$zahl2 = 22;
$res = $zahl1 + $zahl2 . PHP_EOL;
echo $res;

if ($bool !== true) {
  echo "der bool ist true" . PHP_EOL;
} else {
  echo "der bool ist false" . PHP_EOL;
}

$a = true;
$b = false;

$expression = !$b;

var_dump($expression) . PHP_EOL;


function addition($a, $b)
{
  echo $a + $b . PHP_EOL;
}

addition(15, 30);

function subtraktion($a, $b)
{
echo $a - $b . PHP_EOL;
}

subtraktion(60, 30);
