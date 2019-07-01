<?php

$host = '185.148.82.46';
$database = 'admin_mkotytsk';
$user = 'admin_mkotytsk';
$password = 'mkotytsk';
$link = mysqli_connect($host, $user, $password, $database);
mysqli_query($link,"SET NAMES utf8");
mysqli_query($link,"set character_set_client='utf8'");
mysqli_query($link,"set character_set_results='utf8'");
mysqli_query($link,"set collation_connection='utf8'");
if (!$link)
	echo "NotGood\n";
$query = "SELECT * FROM Users";
$result = mysqli_query($link, $query);
mysqli_close($link);
?>
