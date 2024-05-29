<?php

$arr = [
    [1, 2],
    [3,
        ['s', 2 , [
            2, 3, 4
        ]]
    ]
];

function getArr($arr) {
    foreach ($arr as $key => $value) {
        if (is_array($value)) {
            getArr($value);
        } else {
            echo $value;
        }
    }

}

getArr($arr);
