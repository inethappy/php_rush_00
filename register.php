<?php

function p_error() {
    echo "ERROR\n";
}

if ($_POST['submit'] === "OK") {
    if (isset($_POST['login'])) {
        if (!$_POST['passwd']) {
            p_error();
        }
        if (!file_exists("base/user"))
            mkdir("base", 0777, true);
        $arr_data = unserialize(file_get_contents("base/user"));
        foreach ($arr_data as $acc) {
            if ($acc['login'] === $_POST['login'])
                p_error();
        }
        $arr = array('login' => $_POST['login'], 'passwd' => hash("whirlpool", $_POST['passwd']));
        $arr1[] = $arr;
        file_put_contents("base/user", serialize($arr1));
            
    }
    else {
        p_error();
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>SHOP</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <div class="headers">
            <a href="index.php"><img class="logo_img" src="img/cropped-cropped-logot.png" alt=""></a>
            <a href="basket.php"><img class="cart_logo" src="img/cart_logo.png" alt=""></a>
        </div>
        <div class="main">
            <?php include 'menu2.php'; ?>
                <div class="reg">
                 	<form method="POST" class="registration">
                        <h1>Форма регистрации</h1>
                        <p>Заполните поля для регистрации на сайте</p>
                        <p>Имя<br /><input type='text' name='login' required></p>
                        <p>Пароль<br /><input type='password' name='passwd' required></p>
                        <p>Повторите пароль<br /><input type='password' name='passwd2'required></p>
                        <p>Email<br /><input type='text' name='email'required></p>
                        <p><input type='submit' value='OK' name='submit'></p>
					</form>
                </div>
        </div>
            <div class="niz">
                     © vpozniak & mkotytsk 2019
            </div>
    </body>
</html>
