<?php

$basket = [
    [
        'name' => 'Кофеварка',
        'quantity' => 1,
        'price' => 100
    ],
    [
        'name' => 'Блендер',
        'quantity' => 2,
        'price' => 30
    ],
    'sum' => function() {
        echo 'считаю сумму';
    }
];

$basket['sum']();

function total($arr) {
    $sum = 0;
    foreach ($arr as $item)
        $sum += $item['quantity'] * $item['price'];
    return $sum;
}

echo total($basket);