<!DOCTYPE html>
<html>
<body>
    <div class="menu">
            <?php
            session_start();
            if ($value['login'] == $_POST['login'] && $value['passwd'] == hash('whirlpool', $_POST['passwd'])) {
                $_SESSION['logued_user'] = $_POST['login'];
                // var_dump("sdasdadas");
                echo "<form method='POST' action='login.php'>
                <span class='user_text'>Вы вошли как:<br>$_SESSION[login]<br></span>
                <button type='submit' name='submit' value='logout'>Выход</button>
              </form>";
            }

            ?>
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
