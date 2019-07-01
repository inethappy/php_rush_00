<pre>
<?php
session_start();
if ($_POST['submit'] == "logout")
{
	$_SESSION['login'] = "guest";
	$_SESSION['admin'] = 0;
	header("Location: index.php");
	exit();
}
if ($_POST['submit'] == "login" && $_POST['login'] && $_POST['passwd'])
{

	$_POST['passwd'] = hash('sha512', $_POST['passwd']);
	if (file_exists("./db/users"))
		$data = unserialize(file_get_contents("./db/users"));
	foreach ($data as $user)
	{
		if ($user['login'] == $_POST['login'] && $user['passwd'] == $_POST['passwd'])
		{
			$_SESSION['login'] = $user['login'];
			$_SESSION['admin'] = $user['admin'];
			header("Location: index.php");
			exit();
		}
	}
		header("Location: registration.php");
	exit();
}
header("Location: index.php");
?>