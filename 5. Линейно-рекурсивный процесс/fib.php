<?php

$num = 10;

function fib($num) {
  if ($num == 0 || $num == 1) { return $num; }
  return fib($num - 1) + fib($num - 2);
}

echo fib($num);
echo "\n";

 ?>
