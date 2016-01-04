# Реализуйте рекурсивную функцию factorial используя линейно-рекурсивный процесс.

# Факториал числа можно выразить следующим образом:

# factorial(0) -> 1
# factorial(1) -> 1
# factorial(n) -> n * factorial(n - 1)

<?php

$num = 5;

function factorial($num) {
  if ($num == 1) { return $num; }
  return $num * factorial($num - 1);
}

echo factorial($num);
echo "\n";

 ?>
