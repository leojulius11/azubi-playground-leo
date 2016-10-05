<?php


class Math
{
    public $integer1 = 40;
    public $integer2 = 20;

    private $float = 20.5;


    public function addition($a, $b)
    {
      return $a + $b;
    }

    public function subtraktion()
    {
      return $this->integer1 - $this->integer2;
    }

}


$newClass = new Math();

echo $newClass->addition(12, 15) . PHP_EOL;
echo $newClass->addition(55, 15) . PHP_EOL;

echo $newClass->subtraktion() . PHP_EOL;
