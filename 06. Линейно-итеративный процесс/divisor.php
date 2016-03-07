<?php

namespace App\Divisor;

function smallestDivisor($num)
{
    // BEGIN (write your solution here)
    $sdIter = function($num, $acc) use (&$sdIter) {
        if ($num == $acc) {
            return 1;
        }
        if ($num % $acc == 0) {
            return $acc;
        }
        return $sdIter($num, $acc + 1);
    };
    return $sdIter($num, 2);
    // END
}
