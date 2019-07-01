<?php
    // if (!file_exists("base/admin")) {
    //     header('Location: install.php');
    // }
//var_dump($_POST);
require_once 'connection.php';

    session_start();
    if ($_POST['login'] && $_POST['passwd']) {
        if ($_POST['login'] == $user && $_POST['passwd'] == $password)
        {
            $_SESSION['logued_user'] = $_POST['login'];
                header('Location: install.php');
        }
        $users = unserialize(file_get_contents('base/user'));
        foreach ($users as $key => $value) {
            // var_dump($value['passwd']);
            if ($value['login'] == $_POST['login'] && $value['passwd'] == hash('whirlpool', $_POST['passwd'])) {
                $_SESSION['logued_user'] = $_POST['login'];
                header('Location: install.php');
			}
		}
	}
		if (!$_SESSION['logued_user'])
            header('Location: register.php');
?>

<!DOCTYPE html>
<html>
<body>
    <div class="menu" >
            <div class="text_input">
                <form  name="index.php" method="POST">
                    <span>Логин:</span><input class="text_input" type="text" name="login">
                    <br>
                    <span>Пароль:</span><input class="text_input" type="Password" name="passwd">
                    <input type="submit" name="submit" value="OK" method="POST">
                </form>
            </div>
            <div>
                 <ul class="menu">
                <li><a href="./register.php"><span>Регистрация</span></a></li>
               <li><a href="./goods.php"><span>Товары</span></a></li>
               <li><a href="./basket.php"><span>Корзина</span></a></li>
               <li><a href="./about.php"><span>О нас</span></a></li>
               <li><a href="./contact.php"><span>Контакты</span></a></li>
               <li><a href="./install.php"><span>Админ кабинет</span></a></li>
            </ul>
            </div>
    </div>

</body>
</html>


