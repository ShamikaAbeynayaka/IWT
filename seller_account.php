<?php
	include_once'config.php';
?>

<?php

 $address = $_POST["address"];
 $description = $_POST["description"];
 $city = $_POST["city"];
 $extend = $_POST["extend"];
 $price = $_POST["price"];
 $electricity = $_POST["electricity"];
 $water = $_POST["water"];
 $main_road = $_POST["main_road"];
 $school = $_POST["school"];
 $town = $_POST["town"];
 $bus_root = $_POST["bus_root"];
 $bank = $_POST["bank"];
 $hospital = $_POST["hospital"];

$query = "INSERT INTO seller_account(s_acc_id,address, description, city, extend, price, electricity,water,main_road,school,town,bus_root,bank,hospital)
VALUES('','$address', '$description', '$city', '$extend', '$price','$electricity','$water','$main_road','$school','$town','$bus_root','$bank','$hospital')";

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
