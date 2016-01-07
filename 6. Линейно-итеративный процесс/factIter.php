<?php

$num = 5;

function factorial($num) {
  $factIter = function($num, $acc) use (&$factIter) {
    if ($num == 1) { return $acc; }
    return $factIter($num - 1, $num * $acc);
  };

  return $factIter($num, 1);
};

echo factorial($num);
echo "\n";

 ?>
