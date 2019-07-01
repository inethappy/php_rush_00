<?php
require_once 'connection.php';
session_start();

if (isset($_POST['name']) && isset($_POST['Price']) && isset($_POST['Category'])) {
	$link = mysqli_connect($host, $user, $password, $database)
		or die("Error" . mysqli_error($link));
	$name = $_POST['name'];
	$price = $_POST['Price'];
	$cat = $_POST['Category'];
	$img = "img/".$_POST['picture'];
	$query ="INSERT INTO products VALUES (null, '$name', '$price', '$cat', '$img')";
	$result = mysqli_query($link, $query) or die("Error " . mysqli_error($link));
	echo "<span style='color:blue;'>New item was added.</span>";
	?>
	<img src="data:image/png; base64,'.base64_encode($row['image']).'">
	<?php
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