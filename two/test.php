<?php

require_once 'functions.php';
//if (isset($_REQUEST['OK']) && !empty(trim(($_REQUEST['login'])) && !empty(trim($_REQUEST['password']))))
//{
//    echo 'Привет' {$_REQUEST['login']} 'твой пароль' {$_REQUEST}
//} else 'Введен логин или пароль неверный';.....не успела

//=================
if (!isset($_REQUEST['OK']) || empty(trim($_REQUEST['age']))) {
    header('location: index.php');  // так делать нельзя или очень аккуратно

    } else  {
    echo trim($_REQUEST['age']).'<br><br>';
    echo '<a href="index.php">Домой</a>';
}


