<?php

$arr = 'абв';

echo($arr);
for ($i = 0; $i < mb_strlen($arr); $i++) {
    echo mb_substr($arr, $i, 1);
}

echo mb_strtoupper("я");