# Реализуйте функцию product, которая сворачивает последовательность с помощью переданной функции. Примеры:

# 3 == product(1, 2, function($first, $second) { return $first + $second; }) // sum
# -4 == product(1, 3, function($first, $second) { return $first - $second; }) // minus

# То есть вместо жестко заданной операции, например, сложения, нужно рекурсивно применять переданную функцию.

<?php

function product($num1, $num2, $func) {

  if ($num1 == $num2) { return $num2; }
  return $func(product($num1, $num2 - 1, $func), $num2);

}

$m = function($num1, $num2) {
  return $num1 - $num2;
};

$multi = function($num1, $num2) {
  return $num1 * $num2;
};

echo product(1, 2, $m);
echo "\n";

echo product(1, 3, $multi);
echo "\n";

 ?>
