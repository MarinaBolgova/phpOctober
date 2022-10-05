<?php
require_once 'functions.php';


$arrHumans = ['Коля','Вася','Дима','Света'];
$arrTeams = array_chunk($arrHumans, 1); //разносит элементы по разным ключам

/*echo debug($arrHumans);*/
/*echo debug($arrTeams);*/

$arrTeam1 = array_slice($arrTeams, 0, 1 ); // возвращает выбранные элементы
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

