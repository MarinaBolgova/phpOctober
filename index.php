<?php
require_once 'functions.php';
/*

$arrHumans = ['Коля','Вася','Дима','Света'];
$arrTeams = array_chunk($arrHumans, 1); //разносит элементы по разным ключам

/*echo debug($arrHumans);*/
/*echo debug($arrTeams);*/

/*$arrTeam1 = array_slice($arrTeams, 0, 1 ); // возвращает выбранные элементы
$arrTeam2 = array_slice($arrTeams, 1, 1 );

echo debug($arrTeam1);
echo debug($arrTeam2);

$arrNames = ['Коля','Вася','Дима','Света'];
$arrSurnames = ['Петров','Сидоров','Иванов','Смирнова'];

$arrResult = array_combine($arrNames, $arrSurnames);  // элементы первого массива делает ключами, а элемнты второго значениями этих ключей
echo debug($arrResult);

$arrTest = ['Петя','Вася','Дима','Света', 'Дима','Света','Петя','Петя'];//


echo debug(array_count_values($arrTest));

$product = 'Телевизор LG328746';
$price = 30000;

$arrRes = compact('product', 'price');
debug($arrRes);

$arProductsInfo = [
    'productName' => 'Название продукта',
    'productValue' => 125355
];
extract($arProductsInfo);
echo $productName;
echo $productValue;



$arrPr1 = [1, 2, 3, 4, 5];
/*echo debug(array_splice($arrPr1, 1, 3));*/
/*$arrInner = ['a', 'b', 'c'];
array_splice($arrPr1,3,0, $arrInner);
echo debug($arrPr1);

$arrPr2 = [1, 2, 3, 4, 5];

array_splice($arrPr2,1,0, ['a', 'b']);
array_splice($arrPr2,6,0, ['c','d']);
array_splice($arrPr2,9,0, 'e');
echo debug($arrPr2);*/

//============10.10.22
$arrTest = ['Петя','Вася','Дима','Света', 'Дима','Света','Петя','Петя'];
$arrTest2 = [1, 2, -10, 5, 2.5];
showArrayElement(' x,mncfxjn');
showArrayElement($arrTest);
echo '<br>';
echo '<br>';


echo calcSumOfDigits(5,6);
echo '<br>';

echo calcSumOfDigits(5,'ngcfghf') ? : 'Не удалось';
echo '<br>';
echo '<br>';

echo returnDayOfTheWeek(6);

debug(returnPositionValueOfArray($arrTest2));

echo getDigitSum(112);


echo '<br>';
echo '<br>';

    for ($j = 1; $j <= 2022; $j++) {
        if (getDigitSum($j) == 13) {
            echo ($j). ', ';

        }
    }



