<?php

$multi = 2;

function factor($multi) {
  return function($argument) use ($multi) {
    return $argument * $multi;
  };
}

$func = factor($multi);
echo $func(3);
echo "\n";

 ?>
