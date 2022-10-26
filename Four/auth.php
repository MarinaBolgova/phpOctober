<?php
include_once "function.php";
session_start();

if (isset($_REQUEST['submit']) && !empty(trim($_REQUEST['login'])) && !empty(trim($_REQUEST['password']))) {
    $_SESSION['login'] = trim($_REQUEST['login']);
}

if (isset($_SESSION['login'])) {?>

    <a href="index.php">Домой</a>
    <a href="index.php?logout=yes">Выйти</a>
    <div class="alert alert-success" role="alert">
        Привет <?=$_SESSION['login']?>, ты успешно авторизован!
    </div>
    <?php
} else { ?>
<div class="alert alert-danger" role="alert">
    У нас нет данных о существовании пользователя!
</div>
<?php
}



