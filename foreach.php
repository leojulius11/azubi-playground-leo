<?php

$array = [
  0,
  1,
  2,
  3,
  4,
  5,
  6,
  7,
  8,
  9,
  10
];

$array2 = [
  "Hund",
  "Jimdo",
  "Hamburg",
  "Deutschland",
  [
    "Berlin",
    "Stuttgart",
    "München",
    "Frankfurt",
    "Hamburg",
    [
      "Berlin",
      "Stuttgart",
      "München",
      "Frankfurt",
      "Hamburg",
      "Stade"
    ]
  ]
];

var_dump($array2);

foreach ($array2[4][5] as $value) {
  if ($value === "Stade") {
    echo "Frankfurt ist keine schöne Stadt" . PHP_EOL;
  }
}

foreach ($array as $value) {
  echo $value * 2 . PHP_EOL;
}

foreach ($array2 as $value) {
  if ($value === "Hamburg") {
    echo "$value ist eine schöne Stadt" . PHP_EOL;
  } else {
    echo "$value ist keine schöne Stadt" . PHP_EOL;
  }
}
