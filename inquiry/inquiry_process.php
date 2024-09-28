<?php
	include_once'config.php';
?>

<?php

$name = $_POST["name"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$question = $_POST["question"];
$message = $_POST["message"];

$query = "INSERT INTO inquiry(iid, name, phone, email, question, message)
VALUES('', '$name', '$mobile', '$email', '$question', '$message')";

if(mysqli_query($conn,$query))
	{
		echo"<script> alert('Record Insert Successfully') </script>";
		header("Location:inquiry.html");
	}
	else 
	{
		echo"<script> alert('Sorry something wrong. Please try again') </script>";
	}
	
	//close the connection
	mysqli_close($conn); 

?>