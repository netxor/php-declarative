# Реализуйте функцию $sumOfCubes, которая принимает на вход два числа и находит сумму их кубов.
# Воспользуйтесь уже написанной функцией возведения в куб.

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
