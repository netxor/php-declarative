# Реализуйте функцию sum из видео, используя итеративный процесс.

<?php

function sum($a, $b, $func) {

  $sumIter = function($a, $acc) use ($b, $func, &$sumIter) {
    if ($a > $b) { return $acc; }
    return $sumIter($a + 1, $acc + $func($a));
  };

  return $sumIter($a, 0);

}

echo sum(1, 5, function($x) { return $x; });
echo "\n";
