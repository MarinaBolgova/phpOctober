<?php
include_once "header.php";
if (isset($_REQUEST['logout'])) {
    unset($_SESSION['login']);
}
if (!isset($_SESSION['login'])) {


?>

<div class = "container">
    <div class="row justify-content">
    <form action="auth.php" method="post" class="col-6 align-self-center">

        <div class="mb-3">
            <label  class="form-label">Login</label>
            <input type="text" class="form-control"  name="login" >
            <div class="form-text">Введите свой логин</div>
        </div>
        <div class="mb-3">
            <label  class="form-label">Password</label>
            <input type="password" class="form-control"  name="password">
        </div>

        <input type="submit" class="btn btn-primary" name="submit">
    </form>
    </div>
</div>

<?php
} else {?>
<div>
    <div class="alert alert-success" role="alert">
        <?=$_SESSION['login']?>, ты на нашем сайте!
    </div>
    <a href="index.php?logout=yes">Выйти</a>
</div>
    <?php

}



    include_once "footer.php";

