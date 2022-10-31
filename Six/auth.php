<?php
include_once "function.php";
include_once "header.php";

debug($_FILES);


$uploadfile = 'uploads' . '/' . basename($_FILES['userfile']['name']);

echo '<pre>';
// basename() может предотвратить атаку на файловую систему;
// может быть целесообразным дополнительно проверить имя файла

echo $uploadfile;


if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен";
    } else {

       echo "Возможна атака  с помощью файловой загрузки!";
}










include_once "footer.php";