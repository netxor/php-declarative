<?php

function double($func) {
  return function ($arg) use ($func) {
    return $func($func($arg));
  };
}

$inc = functon($arg) {
  return $arg + 1;
};

$func = function(2);
echo double(2);

 ?>
