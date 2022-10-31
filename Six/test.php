<?php
include_once "function.php";
include_once "header.php";


session_start();

$uploadfile = 'uploads' . '/' . basename($_FILES['userfile']['name']);


move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);

if (isset($_REQUEST['submit'])) {
    $_SESSION['login'] = trim($_REQUEST['login']);
}

if (isset($_SESSION['login'])) {?>

    <img src="<?=$uploadfile?>" alt="картинка">

    <?php
} else { ?>
    <div class="alert alert-danger" role="alert">
        У нас нет данных о существовании пользователя!
    </div>
    <?php
}