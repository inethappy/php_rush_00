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
                <div class="content">
                    <div table><tr>
				<?php
				if (isset($_POST['submit'])) {
					session_start();
					require_once 'connection.php';
					$nb = $_POST['submit'];
					$query = "SELECT * FROM `products` WHERE `id` = '$nb'";
					$link = mysqli_connect($host, $user, $password, $database);
					$result = mysqli_query($link, $query) or die("Error " . mysqli_error($link));
					$item = mysqli_fetch_array($result, MYSQLI_ASSOC);
					echo "<td>".$item['Name'];
					echo $item['Price']."</td></tr>";
					if ($_POST['submit'] != 'GO') {
						echo '<form method="POST" action="basket.php">';
						echo "<button type=\"submit\" value='GO' name=\"submit\">GO!</button>";
						echo '</form>';
					}
					if ($_POST['submit'] == 'GO')
						echo "THANKS FOR PURCAHSE!";
				}
				else
					echo "Your backet is empty now."
                ?>
                </div>
        </div>
            <div class="niz">
                     © vpozniak & mkotytsk 2019
            </div>
    </body>
</html>
