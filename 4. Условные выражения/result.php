<?php

function result($a, $b, $c, $d)
{
    if ($a == $c && $b == $d) { return 2; }
    else if ($a < $b && $c < $d || $a > $b && $c > $d || $a == b && $c == d) { return 1; }
    else { return 0; }
}

echo result(1, 2, 1, 2);
echo "\n";

echo result(3, 1, 2, 1);
echo "\n";

echo result(4, 3, 0, 0);
echo "\n";

 ?>
