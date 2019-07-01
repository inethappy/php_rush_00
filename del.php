<?php
require_once 'connection.php';
if(isset($_POST['name']))
{
    $link = mysqli_connect($host, $user, $password, $database)
            or die("Ошибка " . mysqli_error($link));
    $id = mysqli_real_escape_string($link, $_POST['name']);
    $query ="DELETE FROM products WHERE Name = '$id'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
	if ($result)
		echo "<span style='color:red;'>New item was deleted.</span>";
	mysqli_close($link);
}
?>

<!DOCTYPE html>
<html>
<body>
    <div class="menu" >
            <div>
               <li><a href="./index.php"><span>GO_BACK</span></a></li>
            </ul>
            </div>
    </div>

</body>
</html>
