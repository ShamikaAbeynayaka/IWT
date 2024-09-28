<?php

session_start();

// Check if the user is logged in
if (!isset($_SESSION["email"])) {
  // Redirect to the login page or any other appropriate action
  header("Location: login.php");
  exit;
}

// Set up the database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "landsales";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve user information from the session or request parameters
$email = $_SESSION["email"];

// Validate user credentials or conditions, if necessary

// Get the image filename associated with the user
$stmt = $conn->prepare("SELECT image FROM users_img WHERE email = ?");
$stmt->bind_param("s", $email);

// Execute the statement
$stmt->execute();
$stmt->bind_result($imageFilename);
$stmt->fetch();

$stmt->free_result();

// Delete the user's account
$deleteAccountStmt = $conn->prepare("DELETE FROM users WHERE email = ?");
$deleteAccountStmt->bind_param("s", $email);

// Delete the image associated with the user
$deleteImageStmt = $conn->prepare("DELETE FROM users_img WHERE image = ?");
$deleteImageStmt->bind_param("s", $imageFilename);

// Start a transaction for atomicity
$conn->begin_transaction();

// Delete the account and image within the same transaction
if ($deleteAccountStmt->execute() && $deleteImageStmt->execute()) {
  // Account and image deleted successfully
  // Perform any additional actions or feedback as needed
  $conn->commit();
  session_destroy(); // Destroy the session after deleting the account
  echo "Account deleted successfully.";
  header("Location: login.php");
} else {
  // Error deleting the account or image
  // Perform any error handling or feedback as needed
  $conn->rollback();
  echo "Error deleting account.";
}

// Close the statements
$deleteAccountStmt->close();
$deleteImageStmt->close();

// Close the database connection
$conn->close();
?>
