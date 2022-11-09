<?php
require_once 'header.php';

if (isset($_REQUEST['submit']) && !empty(trim($_REQUEST['login'])) && !empty(trim($_REQUEST['password']))) {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=schema_1', 'root', 'Nistor200987');
    $stmt = $pdo->prepare('SELECT login, password FROM table_user WHERE login=?');
    $res = $stmt->execute([$_REQUEST['login']]);
    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        if ($row['password'] = $_REQUEST['password']){
            $_SESSION['login'] = $_REQUEST['login'];
        }

    }
}
if (isset($_SESSION['login'])){
    echo 'Добро пожаловать,'. $_SESSION['login'];
} else {
   echo '<div class=\"alert alert-success\" role=\"alert\">Таких тут нет</div>';
}