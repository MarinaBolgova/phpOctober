<?php
require_once "header.php";
require_once "function.php";

$pdo = new PDO('mysql:host=127.0.0.1;dbname=schema_1', 'root', 'Nistor200987');
/*$stmt = $pdo->query('SELECT * FROM table_user', PDO::FETCH_ASSOC);  // метод квери используется с селектом
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    debug($row);
}*/



/*$stmt = $pdo->prepare("SELECT * FROM table_user");      //такой метод используется, когда
$result = $stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    debug($row);
}*/

/*$stmt = $pdo-> prepare("INSERT INTO table_user(login,password) values('pdo','pdo1')");      //такой метод используется, когда
$result = $stmt->execute();
if ($result){
    echo 'Данные успешно добавлены в БД';
} else {
    echo 'Ошибка записи в БД';
}
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    debug($row);
}*/
/*$stmt = $pdo-> prepare("UPDATE table_user SET login = 'Helen' WHERE ID = 1");      //такой метод используется, когда
$result = $stmt->execute();
if ($result){
    echo 'Данные успешно добавлены в БД';
} else {
    echo 'Ошибка записи в БД';
}
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    debug($row);
}*/


if (isset($_REQUEST['logout'])) {
    unset($_SESSION['login']);
}
if (!isset($_SESSION['login'])) {


    ?>

    <div class = "container">
        <div class="row justify-content">
            <form action="newpass.php" method="post" class="col-6 align-self-center">
                <div class="mb-3">
                    <label  class="form-label">Login</label>
                    <input type="text" class="form-control"  name="login" >
                    <div class="form-text">Введите свой логин</div>
                </div>
                <div class="mb-3">
                    <label  class="form-label">Password</label>
                    <input type="password" class="form-control"  name="password">
                </div>
                <div class="mb-3">
                    <label  class="form-label">NewPass</label>
                    <input type="password" class="form-control"  name="newpass">
                </div>
                <input type="submit" class="btn btn-primary" name="submit">
            </form>
        </div>
    </div>


    <?php

}



    include_once "footer.php";

