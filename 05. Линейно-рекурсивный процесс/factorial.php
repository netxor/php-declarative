<?php

$num = 5;

function factorial($num) {
  if ($num == 1) { return $num; }
  return $num * factorial($num - 1);
}

echo factorial($num);
echo "\n";

 ?>
