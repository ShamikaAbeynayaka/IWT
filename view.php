<?php
	include_once'config.php';
?>

<?php
session_start();


// Get the user details from the session or database
$s_acc_id = $_SESSION["s_acc_id"];

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "landa";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL statement to fetch user details based on the email
$stmt = $conn->prepare("SELECT * FROM users WHERE address= ?");
$stmt->bind_param("s", $address);
$stmt->execute();

// Fetch the result
$result = $stmt->get_result();

// Check if the user exists
if ($result->num_rows == 1) {
    // User exists, fetch the details
    $row = $result->fetch_assoc();
    $address = $row["address"];
    $description = $row["description"];
    $city = $row["city"];
    $extend = $row["extend"];
    $price = $row["price"];
    $electricity = $row["electricity"];
    $water = $row["water"];
    $main_road = $row["main_road"];
    $school = $row["school"];
    $town = $row["town"];
    $image = $row["image"];
} 

// Close the prepared statement
$stmt->close();

// Close the database connection
$conn->close();
?>
