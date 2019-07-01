<?php
	header("Content-Type: text/plain");

	$to_delete = $_GET['login'];

	$users = unserialize(file_get_contents('base/user'));

	var_dump($users);
	 foreach ($users as $id => $value)
	     foreach ($users[$id] as $field => $val)
	     	if ($to_delete === $val)
	     		unset($users[$id]);
	var_dump($users);
	file_put_contents('base/user', serialize($users));
	header("Location: adminlogin.php");
?>