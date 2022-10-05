<?php
require_once 'functions.php';


$arrHumans = ['Коля','Вася','Дима','Света'];
$arrTeams = array_chunk($arrHumans, 1);

/*echo debug($arrHumans);*/
/*echo debug($arrTeams);*/

$arrTeam1 = array_slice($arrTeams, 0, 1 );
echo debug($arrTeam1);