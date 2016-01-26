<?php

$cube = function ($number) {
  return $number * $number * $number;
};

$sumOfCubes = function($a, $b) use ($cube) {
  return $cube($a) + $cube($b);
};

echo $sumOfCubes(2, 4);
echo "\n";

 ?>
