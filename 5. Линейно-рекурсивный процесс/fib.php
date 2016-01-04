# Реализуйте рекурсивную fib находящую числа Фибоначчи используя древовидно-рекурсивный процесс.

# Формула:

# f(0) = 0
# f(1) = 1
# f(n) = f(n-1) + f(n-2)

# Пример:

# 2 == fib(3)
# 5 == fib(5)
# 55 == fib(10)

<?php

$num = 10;

function fib($num) {
  if ($num == 0 || $num == 1) { return $num; }
  return fib($num - 1) + fib($num - 2);
}

echo fib($num);
echo "\n";

 ?>
