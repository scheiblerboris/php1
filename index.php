<?php

//$a = -10;
//$b = 2;
//
//function mathOperation(int $a, int $b) {
//    if ($a >= 0 && $b >= 0) return abs($a - $b);
//    elseif ($a < 0 && $b < 0) return abs($a * $b);
//    else return $a + $b;
//}
//
//echo mathOperation($a, $b);

//
//$a = 5;
//
//switch ($a) {
//    case 1:
//        echo 1;
//        echo ', ';
//    case 2:
//        echo 2;
//        echo ', ';
//    case 3:
//        echo 3;
//        echo ', ';
//    case 4:
//        echo 4;
//        echo ', ';
//    case 5:
//        echo 5;
//        echo ', ';
//    case 6:
//        echo 6;
//        echo ', ';
//    case 7:
//        echo 7;
//        echo ', ';
//    case 8:
//        echo 8;
//        echo ', ';
//    case 9:
//        echo 9;
//        echo ', ';
//    case 10:
//        echo 10;
//        echo ', ';
//    case 11:
//        echo 11;
//        echo ', ';
//    case 12:
//        echo 12;
//        echo ', ';
//    case 13:
//        echo 13;
//        echo ', ';
//    case 14:
//        echo 14;
//        echo ', ';
//    case 15:
//        echo 15;
//}

//function add($operand1, $operand2)
//{
//    return $operand1 + $operand2;
//}
//
//function minus($operand1, $operand2)
//{
//    return $operand1 - $operand2;
//}
//
//function multiple($operand1, $operand2)
//{
//    return $operand1 * $operand2;
//}
//
//function division($operand1, $operand2)
//{
//    if ($operand2 == 0) return 'На ноль делить нельзя!';
//    return round($operand1 / $operand2, 2);
//}
//
//function mathOperation($arg1, $arg2, $operation)
//{
//    $res = 0;
//    switch ($operation) {
//        case '+':
//            $res = add($arg1, $arg2);
//            break;
//        case '-':
//            $res = minus($arg1, $arg2);
//            break;
//        case '*':
//            $res = multiple($arg1, $arg2);
//            break;
//        case '/':
//            $res = division($arg1, $arg2);
//            break;
//        default:
//            $res = 'Нет такой операции';
//    }
//    return $res;
//}
//
//echo mathOperation(10, 3, '/');

//function power($val, $pow) {
//    if ($pow == 0) return 1;
//    return $val * power( $val,$pow - 1);
//}
//
//echo power(3, 3);

/*
0 часов	минут	10 часов минут 20 часов минут	30 минут  40 минут
1 час	минута	11 часов минут 21 час	минута	31 минута 41 минута
2 часа	минуты	12 часов минут 22 часа	минуты	32 минуты 42 минуты
3 часа	минуты	13 часов минут 23 часа	минуты	33 минуты 43 минуты
4 часа	минуты	14 часов минут 24 часа	минуты	34 минуты 44 минуты
5 часов	минут	15 часов минут 25		минут	35 минут  45 минут
6 часов	минут	16 часов минут 26		минут	36 минут  46 минут
7 часов минут	17 часов минут 27		минут	37 минут  47 минут
8 часов	минут	18 часов минут 28		минут	38 минут  48 минут
9 часов минут	19 часов минут 29		минут	39 минут  49 минут
*/


function getTime()
{
    return [
        'hours' => date("h") + 4,
        'minutes' => date("i"),
    ];
}

function getOnes($digit)
{
    return $digit % 10;
}

function getDozens($digit)
{
    return floor(($digit % 100) / 10);
}

function getTale($digit, $tale)
{
    switch ($digit) {
        case 1:
            return $tale['1'];
        case 2:
        case 3:
        case 4:
            return $tale['234'];
        default:
            return $tale['default'];
    }
}

$hourArr = [
    'default' => 'часов',
    '1' => 'час',
    '234' => 'часа'
];

$minuteArr = [
    'default' => 'минут',
    '1' => 'минута',
    '234' => 'минуты'
];

function getHoursTale($hours, $hourArr) {
    $hourOnes = getOnes($hours);
    $hourDozens = getDozens($hours);

    if ($hourDozens == 1) return $hourArr['default'];
    return getTale($hourOnes, $hourArr);
}

function getMinutesTale($minutes, $minuteArr) {
    $minuteOnes = getOnes($minutes);
    $minuteDozens = getDozens($minutes);

    if ($minuteDozens == 1) return $minuteArr['default'];
    return getTale($minuteOnes, $minuteArr);
}


function printTime($hourArr, $minuteArr)
{
    $hours = getTime()['hours'];
    $minutes = getTime()['minutes'];
    $hoursTale = getHoursTale($hours, $hourArr);
    $minutesTale = getMinutesTale($minutes, $minuteArr);

    return "В Новосибирске $hours $hoursTale $minutes $minutesTale";
}


echo printTime($hourArr, $minuteArr);
