<?php
	include_once'config.php';
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$card_name = $_POST["field1"];
$card_holder_name = $_POST["field2"];
$card_number = $_POST["field3"];
$expiration_date= $_POST["field4"];
$scurity_code = $_POST["field5"];
$bal_1 = $_POST["field6"];
$bal_2 = $_POST["field7"];
$city = $_POST["field8"];
$zip_code = $_POST["field9"];
$state = $_POST["field10"];
$telephone = $_POST["field11"];
$email = $_POST["field12"]; 
	
$query = "INSERT INTO Payment(payment_id, card_name, holder_name, card_number ,Date , scurity_code , BAL_1 , BAL_2 , City, Zip_code , State , Telephone , Email)
VALUES('','$card_name', '$card_holder_name', '$card_number' , '$expiration_date', '$scurity_code', '$bal_1','$bal_2','$city','$zip_code','$state','$telephone','$email')";
	
if(mysqli_query($conn,$query))
    {
	    echo"<script> alert('Record Insert Successfully') </script>";
	    header("Location:Payment.html");
		
		echo"
		<script>
		alert('data Inserted');
		</script>
		";
    }
    else 
    {
	    echo"<script> alert('Sorry something wrong. Please try again') </script>";
    }
}	
	//close the connection
    mysqli_close($conn); 

?>