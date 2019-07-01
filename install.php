<?php
require_once 'connection.php';

 session_start();

 function auth($login, $passwd) {
	$pwd = hash("whirlpool", $passwd);
	$arr = unserialize(file_get_contents("private/passwd"));
	if ($arr) {
		foreach ($arr as $key => $value) {
			if ($value['login'] == $login && $value['password'] == $pwd)
				return true;
		}
	}
	return false;
}

if ($_SESSION['logued_user'] == $user) { //(auth($_POST['login'], $_POST['password']) == true || ($_POST['login'] == $user && $_POST['password'] == $password) ||
	echo "Hello admin!";
	if ($_SESSION['logued_user'] == $user) {
		?>
		<h2>You can add new item in data_base here.</h2>
		<form method="POST" action="new.php" type="submit">
		<button type="submit" value='GO' name="submit">Add</button>
		</form>
		<h2>You can delete one item in data_base here.</h2>
		<form method="POST" action="del_one.php" type="submit">
		<button type="submit" value='GO' name="submit">Delete</button>
		</form>
		<h2>You can remove users here.</h2>
		<form method="POST" action="adminlogin.php" type="submit">
		<button type="submit" value='GO' name="submit">Delete user</button>
		</form>
		<?php
	}
}
else {
	$_SESSION['loggued_on_user'] = '';
	echo "ERROR. You need to be registred\n";
	exit();
}
