<?php

$x = 1;

function inc(&$x)
{
    $x++;
    return $x;
}


inc($x);

var_dump($x);

