<?php

function factorial($n, $res = 1) {
    if ($n <= 0) return $res;
    $res *= $n;
    $n--;
    return factorial($n,  $res);
}

echo factorial(5);
