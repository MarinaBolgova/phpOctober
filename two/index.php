<?php

require_once 'functions.php';


if (!isset($_REQUEST['OK']) || empty(trim($_REQUEST['name']) || empty(trim($_REQUEST['title'])))) {
 if ( isset($_REQUEST['title'])){
     echo 'Файла'. trim($_REQUEST['title']). 'не существует';

 }
?>

<!--<form action='test.php' method="post">
    <input type="text" name="login">
    <input type="password" name="password">
    <button type="submit" name="OK">
</form>-->


<!--<form action='test.php' method="post">
    <input type="text" name="age">
    <button type="submit" name="OK">
</form>-->
    <form action='index.php' method="get">
        <input type="text" name="name">
        <input type="text" name="title">
        <button type="submit" name="OK">
    </form>-->

<?php

} else {
    if (file_exists(trim($_REQUEST['title']))) {

        header('location: ' . trim($_REQUEST['title']) . '?name= ' . trim($_REQUEST['name']));

    }


}

?>