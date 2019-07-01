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
            <?php include 'menu.php';
            echo "<div class=\"good\">";
            require_once 'connection.php';
            session_start();

            $link = mysqli_connect($host, $user, $password, $database);
            $query = "SELECT * FROM `products`";
            $result = mysqli_query($link, $query);
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
                echo "<div class = \"content\">";
                foreach ($item as $key => $value) {
                    if ($key == "img") {
                        echo "<img class=\"logo_img\" src=".$item['img'].">";
                        echo "<form method=\"POST\" action=\"basket.php\"><button type=\"submit\" name=\"submit\" value=\"".$item['id']."\">Заказать</button></form>";
                    }
                    else if ($key == "Name")
                        echo "<p>".$item['Name']."</p>";
                    else if ($key == "Price")
                        echo "<p>".$item['Price']."</p>";
                    }
                echo "</div>";
            }
            echo "</div>";
?>
                </div>
        </div>
            <div class="niz">
                     © vpozniak & mkotytsk 2019
            </div>
    </body>
</html>
