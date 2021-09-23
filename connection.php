<?php
	$host     = "localhost";
	$dbName   = "amansinghdesigner";
	$userName = "root";
	$password = "";

	$connect = mysqli_connect($host, $userName, $password ,$dbName) or die(mysql_error());
?>