<?php
include_once "header.php";


    ?>

    <div class = "container">
        <div class="row justify-content">
            <form action="test.php" method="post" enctype="multipart/form-data" class="col-6 align-self-center">

                <div class="mb-3">
                    <label  class="form-label">Login</label>
                    <input type="text" class="form-control"  name="login" >
                    <div class="form-text">Введите свой логин</div>
                </div>
                <div class="mb-3">
                    <label  class="form-label">Password</label>
                    <input type="password" class="form-control"  name="password">
                </div>
                <input type="hidden" name="MAX_FILE_SIZE" value="30000000">
                <input type="file" multiple="" name="userfile[]">
                <input type="submit" class="btn btn-primary" name="submit">
            </form>
        </div>
    </div>

<?php




include_once "footer.php";

