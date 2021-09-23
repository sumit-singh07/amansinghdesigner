<?php
	include("connection.php");
	$name = $_GET['name'];
	$mobile = $_GET['mobile'];
	$email = $_GET['email'];
	$sub = $_GET['sub'];
	$msg = $_GET['msg'];
	$query = "insert into contact(contact_name, contact_mobile, contact_email, contact_sub, contact_msg) values ('$name','$mobile','$email','$sub','$msg')";
	$sql = mysqli_query($connect,$query);
	if($sql)
	{
		echo 1;
	}
?>