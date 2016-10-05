<?php


 class Math
 {
   public function addition($a, $b)
   {
     return $a + $b;
   }

   public function subtraktion($a, $b)
   {
     return $a - $b;
   }

   public function multiplikation($a, $b)
   {
     return $a * $b;
   }

   public function division($a, $b)
   {
     return $a / $b;
   }
 }


 $newClass = new Math();
 echo "Addition: " . $newClass->addition(34, 44) . PHP_EOL;
 echo "Subtraktion: " . $newClass->subtraktion(70, 50) . PHP_EOL;
 echo "Multiplikation: " . $newClass->multiplikation(20, 20) . PHP_EOL;
 echo "Division: " . $newClass->division(20, 5) . PHP_EOL;
