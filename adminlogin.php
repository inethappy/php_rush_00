<?php
    
    $users = [];

    $users = unserialize(file_get_contents('base/user'));
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
                        <?php
                            foreach ($users as $id => $value) {
                                echo "<p style=\"border: 2px solid black\">";
                                foreach ($users[$id] as $field => $val) {
                                    echo "$val ";
                                    echo "<br />";
                                    if ($field == 'passwd')
                                        echo '<td>' . '<a href="delete.php?'. 'login=' . $users[$id]['login']. '">delete</a>' . '</td>';
                                }
                                echo "</p>";
                        } ?>
					</form>
                </div>
        </div>
            <div class="niz">
                     © vpozniak & mkotytsk 2019
            </div>
    </body>
</html>