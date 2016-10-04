<?php

$arrayTypeOne = [
  "Hase" => "Langohr",
  "Fuchs" => "rot",
  "Datum" => "04.10.2016"
];

var_dump($arrayTypeOne);

echo $arrayTypeOne["Fuchs"] . PHP_EOL;


$arrayTypeSecond = [
  "Hase" => "Langohr",
  "Fuchs" => "rot",
  "Datum" => [
    "datum1",
    "datum2",
      [
        "Tag" => "Dienstag"
      ]
  ]
];


var_dump($arrayTypeSecond);

echo $arrayTypeSecond["Datum"][0] . PHP_EOL;


echo $arrayTypeSecond["Datum"][2]["Tag"] . PHP_EOL;

$arrayTYpeThird = [
  "Ball" => "Spielen",
  "Jimdo" => [
    "Tier" => "Hund",
    "Land" => "Deutschland",
  ]
];

var_dump($arrayTYpeThird);
echo $arrayTYpeThird["Jimdo"]["Land"] . PHP_EOL;





$arrayType = [
  "Hund",
  "Katze",
  "Fisch",
  "Maus",
  [
    "ersterEintrag",
    "zweiterEintrag"
  ]
];

var_dump($arrayType);

echo $arrayType[4][1] . PHP_EOL;
