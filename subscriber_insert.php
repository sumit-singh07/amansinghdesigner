<?php
	include("connection.php");
	$email = $_GET['email'];
	$query = "insert into subscriber(subscriber_email) values ('$email')";
	$sql = mysqli_query($connect,$query);
	if($sql)
	{
		echo 1;
	}
?>