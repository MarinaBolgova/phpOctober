<?php

function debug ($info, $is_die = false)
{
    echo '<pre>' . print_r($info, true) . '</pre>';
    if ($is_die){
        die();
    }
}
function change($param)
{
    $param = 'жопа';
}

function showArrayElement($arr)
{
    if (is_array($arr)) {
        foreach ($arr as $key => $value) {
            echo 'Ключ:'. $key. ' ; '. 'Значение:'. $value;
        }
    } else echo 'Вы передали не массив в функцию';
}

function calcSumOfDigits($digit1, $digit2) : int | bool
{ if (is_int($digit1) && is_int($digit2))
    {

    return $digit1 + $digit2;
}
return false;
}
function returnDayOfTheWeek($numberOfDay) : string | bool
{   if(is_int($numberOfDay) && ($numberOfDay >= 1 && $numberOfDay <= 7)) {
    $arrDayOfTheWeek = [
        1 => 'Понедельник',
        2 => 'Вторник',
        3 => 'Среда',
        4 => 'Четверг',
        5 => 'Пятница',
        6 => 'Суббота',
        7 => 'Воскресенье'
    ];
    return $arrDayOfTheWeek[$numberOfDay];
} return false;
}

/** Функция возвращает массив с целыми положительными элементами массива
 * @param $arr - массив
 * @return array|false
 */
function returnPositionValueOfArray($arr)
{
    if (is_array($arr)) {
        $resultArray = [];
        foreach ($arr as $value)
        {
            if ((is_int($value) || is_double($value)) && $value >= 0)
            {
                $resultArray[] = $value;
            }
        }
        return $resultArray;

    }
    return false;
}
function getDigitSum($digt) : int
{   $num = 0;
    $digt = $digt . '';
    for ($i = 0; $i < strlen($digt); $i++) {
        $num += $digt[$i];
    }
return $num;
}
function getMin($x,$y)
{
    $x < $y ? $min = $x : $min = $y;
    return $min;
}
function getMax($x,$y)
{
    $x > $y ? $max = $x : $max = $y;
    return $max;
}


function selectYear($a, $b = 0)
{ 
    $arr = [];
    if (is_int($a) && is_int($b))
    {
        for ($j = getMin($a, $b); $j <= getMax($a, $b); $j++)
        {
            if (getDigitSum($j) == 13) 
            {
            $arr[] = $j;
            }
        }
    } else return 'Ошибка';
    return $arr;
}


   

