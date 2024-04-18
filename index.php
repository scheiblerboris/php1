<?php

function factorial($n, $res = '') {
    if ($n <= 0) return strrev($res);
    $res .= $n;
    $n--;
    return factorial($n,  $res);
}

echo factorial(5);
