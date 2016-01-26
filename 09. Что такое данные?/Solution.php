<?php

namespace App\Solution;

function cons($x, $y)
{
    return function ($func) use ($x, $y) {
        return $func($x, $y);
    };
}

function car($pair)
{
    // BEGIN (write your solution here)
    return $pair(function($a, $b) { return $a; });
    // END
}

function cdr($pair)
{
    // BEGIN (write your solution here)
    return $pair(function($a, $b) { return $b; });
    // END
}
